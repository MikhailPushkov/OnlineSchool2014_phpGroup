<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Users extends ORM implements Acl_Role_Interface {

    protected $_table_name='users';

    /**
     * Returns the string identifier of the Role
     *
     * @return string
     */
    public function get_role_id() {
        return $this->role;
    }

}
