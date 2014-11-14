<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-01 03:55:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2014-10-01 03:55:38 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2014-10-01 03:56:31 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2014-10-01 03:56:31 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2014-10-01 04:02:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\layouts\main.php [ 12 ] in file:line
2014-10-01 04:02:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-01 04:03:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\layouts\main.php [ 12 ] in file:line
2014-10-01 04:03:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-01 04:13:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layouts\header.php [ 10 ] in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:13:49 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\header.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:14:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layouts\header.php [ 10 ] in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:14:53 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\header.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layouts\header.php [ 10 ] in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:15:22 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\header.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layouts\header.php [ 10 ] in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 04:15:22 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\header.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\application\views\layouts\header.php:10
2014-10-01 05:05:46 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in C:\wamp\www\kohana\application\classes\Controller\Welcome.php:17
2014-10-01 05:05:46 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\koh...', 17, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Welcome.php:17