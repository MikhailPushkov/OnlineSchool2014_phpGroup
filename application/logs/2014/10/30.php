<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-30 11:21:37 --- CRITICAL: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-10-30 11:21:37 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('login')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('login', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\Auth.php(15): Kohana_View::factory('login')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137