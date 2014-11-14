<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-05 13:30:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function http_redirect() ~ APPPATH\classes\Controller\System\Base.php [ 16 ] in file:line
2014-11-05 13:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 13:30:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function http_redirect() ~ APPPATH\classes\Controller\System\Base.php [ 16 ] in file:line
2014-11-05 13:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 13:30:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function http_redirect() ~ APPPATH\classes\Controller\System\Base.php [ 16 ] in file:line
2014-11-05 13:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 21:05:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\pages\admin\adduserp.php [ 53 ] in C:\wamp\www\kohana\application\views\pages\admin\adduserp.php:53
2014-11-05 21:05:44 --- DEBUG: #0 C:\wamp\www\kohana\application\views\pages\admin\adduserp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 53, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\layouts\main.php(23): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\System\Base.php(42): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\pages\admin\adduserp.php:53
2014-11-05 21:06:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\kohana\system\classes\Kohana\HTML.php:71
2014-11-05 21:06:04 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\koh...', 71, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\kohana\system\classes\Kohana\Form.php(107): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\kohana\application\views\pages\admin\adduserp.php(53): Kohana_Form::input('test', Array)
#4 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\wamp\www\kohana\application\views\layouts\main.php(23): Kohana_View->__toString()
#8 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#9 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#10 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\kohana\application\classes\Controller\System\Base.php(42): Kohana_Controller_Template->after()
#12 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#15 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\wamp\www\kohana\system\classes\Kohana\HTML.php:71
2014-11-05 21:51:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: radio ~ APPPATH\classes\Controller\Admin.php [ 25 ] in C:\wamp\www\kohana\application\classes\Controller\Admin.php:25
2014-11-05 21:51:36 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Admin.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\koh...', 25, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addingus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Admin.php:25