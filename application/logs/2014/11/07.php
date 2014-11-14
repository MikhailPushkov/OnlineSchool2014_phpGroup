<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-07 00:11:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\System\Base.php [ 37 ] in file:line
2014-11-07 00:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-07 00:12:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\System\Base.php [ 37 ] in file:line
2014-11-07 00:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-07 00:13:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\System\Base.php [ 38 ] in file:line
2014-11-07 00:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-07 00:34:18 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-11-07 00:34:18 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\kohana\application\classes\Controller\System\Base.php(35): Kohana_Controller_Template->before()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(69): Controller_System_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-11-07 00:34:35 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-11-07 00:34:35 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\kohana\application\classes\Controller\System\Base.php(35): Kohana_Controller_Template->before()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(69): Controller_System_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-11-07 00:34:38 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2014-11-07 00:34:38 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\kohana\application\classes\Controller\System\Base.php(35): Kohana_Controller_Template->before()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(69): Controller_System_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137