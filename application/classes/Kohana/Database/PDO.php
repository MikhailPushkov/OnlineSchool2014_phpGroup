<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * 
 * ====================================================================================================
 * Данный файл был портирован из каталога /Modules/database/classes/Kohana/Database, имя файла PDO.php.
 * При этом были внесены некоторые изменения в методы класса.
 * ====================================================================================================
 *
 *
 * Подключение к базе данных PDO.
 *
 * @package    Kohana/Database
 * @category   Drivers
 * @author     Kohana Team
 * @copyright  (c) 2008-2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Kohana_Database_PDO extends Database {

	// PDO uses no quoting for identifiers
	protected $_identifier = '';

	public function __construct($name, array $config)
	{
		parent::__construct($name, $config);

		if (isset($this->_config['identifier']))
		{
			// Allow the identifier to be overloaded per-connection
			$this->_identifier = (string) $this->_config['identifier'];
		}
	}

	public function connect()
	{
		if ($this->_connection)
			return;

		// Extract the connection parameters, adding required variabels
		extract($this->_config['connection'] + array(
			'dsn'        => '',
			'username'   => NULL,
			'password'   => NULL,
			'persistent' => FALSE,
		));

		// Clear the connection parameters for security
		unset($this->_config['connection']);

		// Force PDO to use exceptions for all errors
		$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

		if ( ! empty($persistent))
		{
			// Make the connection persistent
			$options[PDO::ATTR_PERSISTENT] = TRUE;
		}

		try
		{
			// Create a new PDO connection
			$this->_connection = new PDO($dsn, $username, $password, $options);
		}
		catch (PDOException $e)
		{
			throw new Database_Exception(':error',
				array(':error' => $e->getMessage()),
				$e->getCode());
		}
	}

	/**
	 * Create or redefine a SQL aggregate function.
	 *
	 * [!!] Works only with SQLite
	 *
	 * @link http://php.net/manual/function.pdo-sqlitecreateaggregate
	 *
	 * @param   string      $name       Name of the SQL function to be created or redefined
	 * @param   callback    $step       Called for each row of a result set
	 * @param   callback    $final      Called after all rows of a result set have been processed
	 * @param   integer     $arguments  Number of arguments that the SQL function takes
	 *
	 * @return  boolean
	 */
	public function create_aggregate($name, $step, $final, $arguments = -1)
	{
		$this->_connection or $this->connect();

		return $this->_connection->sqliteCreateAggregate(
			$name, $step, $final, $arguments
		);
	}

	/**
	 * Create or redefine a SQL function.
	 *
	 * [!!] Works only with SQLite
	 *
	 * @link http://php.net/manual/function.pdo-sqlitecreatefunction
	 *
	 * @param   string      $name       Name of the SQL function to be created or redefined
	 * @param   callback    $callback   Callback which implements the SQL function
	 * @param   integer     $arguments  Number of arguments that the SQL function takes
	 *
	 * @return  boolean
	 */
	public function create_function($name, $callback, $arguments = -1)
	{
		$this->_connection or $this->connect();

		return $this->_connection->sqliteCreateFunction(
			$name, $callback, $arguments
		);
	}

	public function disconnect()
	{
		// Destroy the PDO object
		$this->_connection = NULL;

		return parent::disconnect();
	}

	public function set_charset($charset)
	{
		// Make sure the database is connected
		$this->_connection OR $this->connect();

		// This SQL-92 syntax is not supported by all drivers
		$this->_connection->exec('SET NAMES '.$this->quote($charset));
	}

	public function query($type, $sql, $as_object = FALSE, array $params = NULL)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		if (Kohana::$profiling)
		{
			// Benchmark this query for the current instance
			$benchmark = Profiler::start("Database ({$this->_instance})", $sql);
		}

		try
		{
			$result = $this->_connection->query($sql);
		}
		catch (Exception $e)
		{
			if (isset($benchmark))
			{
				// This benchmark is worthless
				Profiler::delete($benchmark);
			}

			// Convert the exception in a database exception
			throw new Database_Exception(':error [ :query ]',
				array(
					':error' => $e->getMessage(),
					':query' => $sql
				),
				$e->getCode());
		}

		if (isset($benchmark))
		{
			Profiler::stop($benchmark);
		}

		// Set the last query
		$this->last_query = $sql;

		if ($type === Database::SELECT)
		{
			// Convert the result into an array, as PDOStatement::rowCount is not reliable
			if ($as_object === FALSE)
			{
				$result->setFetchMode(PDO::FETCH_ASSOC);
			}
			elseif (is_string($as_object))
			{
				$result->setFetchMode(PDO::FETCH_CLASS, $as_object, $params);
			}
			else
			{
				$result->setFetchMode(PDO::FETCH_CLASS, 'stdClass');
			}

			$result = $result->fetchAll();

			// Return an iterator of results
			return new Database_Result_Cached($result, $sql, $as_object, $params);
		}
		elseif ($type === Database::INSERT)
		{
			// Return a list of insert id and rows created
			return array(
				$this->_connection->lastInsertId(),
				$result->rowCount(),
			);
		}
		else
		{
			// Return the number of rows affected
			return $result->rowCount();
		}
	}

	public function begin($mode = NULL)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return $this->_connection->beginTransaction();
	}

	public function commit()
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return $this->_connection->commit();
	}

	public function rollback()
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return $this->_connection->rollBack();
	}

	public function list_tables($like = NULL)
	{
		throw new Kohana_Exception('Database method :method is not supported by :class',
			array(':method' => __FUNCTION__, ':class' => __CLASS__));
	}
	/**
	 * (non-PHPdoc)
	 * @see Kohana_Database::list_columns()
	 */
	public function list_columns($table, $like = NULL, $add_prefix = TRUE)
	{
		$table = ($add_prefix === TRUE) ? $this->quote_table($table) : $table; // Если необходимо, то добавляем префикс к имени таблицы
		if (is_string($like)) // Если есть дополнительные условия запроса
			$result = $this->query(Database::SELECT, 'DESCRIBE '.$table.' LIKE '.$this->quote($like), FALSE);
		else
			$result = $this->query(Database::SELECT, 'DESCRIBE '.$table, FALSE);
		$count = 0;
		$columns = array();
		foreach ($result as $row) // Пробегаемся по всем строкам результата
		{
			list($type, $length) = $this->_parse_type($row['Type']); // Назначаем тип и размерность типа
			$column = $this->datatype($type); // Получаем и запоминаем структуру, поисывающую данный тип
			$column['column_name']      = $row['Field']; // Извлекаем имя столбца
			$column['column_default']   = $row['Default']; // Извлекаем значение по умолчанию
			$column['data_type']        = $type; // Запоминаем тип данных
			$column['is_nullable']      = ($row['Null'] == 'YES'); // Извлекаем признак поля IS_NULL
			$column['ordinal_position'] = ++$count; // Запоминаем порядок следования

            if (isset($column['type']))
                switch ($column['type']) // В зависимости от типа производим дополнительные действия
                {
                    case 'float':
                        if (isset($length))
                            list($column['numeric_precision'], $column['numeric_scale']) = explode(',', $length);
                        break;
                    case 'int':
                        if (isset($length))
                            $column['display'] = $length;
                        break;
                    case 'string':
                        switch ($column['data_type'])
                        {
                            case 'binary':
                            case 'varbinary':
                                $column['character_maximum_length'] = $length;
                            break;
                            case 'char':
                            case 'varchar':
                                $column['character_maximum_length'] = $length;
                            case 'text':
                            case 'tinytext':
                            case 'mediumtext':
                            case 'longtext':
                                if (isset($row['Collation']))
                                    $column['collation_name'] = $row['Collation'];
                            break;
                            case 'enum':
                            case 'set':
                                $column['collation_name'] = $row['Collation'];
                                $column['options'] = explode('\',\'', substr($length, 1, -1));
                            break;
                        }
                    break;
                }
			$column['extra'] = $row['Extra']; // Извлекаем дополнительные атрибуты
			$columns[$row['Field']] = $column; // Сохраняем структуру с данными о столбце
		}
		return $columns;
	}

	public function escape($value)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return $this->_connection->quote($value);
	}

} // End Database_PDO
