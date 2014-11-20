<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends A1_ORM implements Acl_Role_Interface {

    protected $_table_name='users';

    /**
     * Loads the user object from database using username
     *
     * @param   string   username
     * @return  object   User Object
     */
    protected function _load_user($username)
    {
        /return $this->where('login', '=', $username)->find();
    }
    /**
     * Returns the string identifier of the Role
     *
     * @return string
     */
    public function get_role_id() {
    	return $this->role;
    }

}
