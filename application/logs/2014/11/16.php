<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-16 01:21:46 --- CRITICAL: Kohana_Exception [ 0 ]: The typereal property does not exist in the Model_Realitive class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-16 01:21:46 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('typereal')
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(43): Kohana_ORM->__get('typereal')
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-16 02:39:45 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'kohana.articleses' doesn't exist [ INSERT INTO articleses () VALUES () ] ~ APPPATH\classes\Kohana\Database\PDO.php [ 158 ] in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:39:45 --- DEBUG: #0 C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\new\application\classes\Controller\Admin.php(39): Kohana_ORM->save()
#4 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addpredmet()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:40:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function values() ~ APPPATH\classes\Controller\Admin.php [ 40 ] in file:line
2014-11-16 02:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-16 02:42:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function values() ~ APPPATH\classes\Controller\Admin.php [ 42 ] in file:line
2014-11-16 02:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-16 02:44:16 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'kohana.articleses' doesn't exist [ INSERT INTO articleses () VALUES () ] ~ APPPATH\classes\Kohana\Database\PDO.php [ 158 ] in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:44:16 --- DEBUG: #0 C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\new\application\classes\Controller\Admin.php(39): Kohana_ORM->save()
#4 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addpredmet()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:45:29 --- CRITICAL: Kohana_Exception [ 0 ]: The article property does not exist in the Model_Articles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-16 02:45:29 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('article')
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(42): Kohana_ORM->__get('article')
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addpredmet()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-16 02:47:34 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO articles () VALUES () ] ~ APPPATH\classes\Kohana\Database\PDO.php [ 158 ] in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:47:34 --- DEBUG: #0 C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\new\application\classes\Controller\Admin.php(39): Kohana_ORM->save()
#4 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addpredmet()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-16 02:49:50 --- CRITICAL: Kohana_Exception [ 0 ]: The artice property does not exist in the Model_Articles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-16 02:49:50 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('artice')
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(42): Kohana_ORM->__get('artice')
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addpredmet()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603