<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-07 15:20:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$login' (T_VARIABLE) ~ APPPATH\classes\Controller\main.php [ 40 ] in file:line
2014-10-07 15:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:38:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 39 ] in file:line
2014-10-07 15:38:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:38:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2014-10-07 15:38:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:38:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2014-10-07 15:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:39:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 39 ] in file:line
2014-10-07 15:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:39:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2014-10-07 15:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:44:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2014-10-07 15:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2014-10-07 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:44:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:44:41 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:30 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:44 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:45:45 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:46:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:46:07 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:46:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:46:24 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:32 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:33 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:34 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:34 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:35 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:35 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:36 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:47:51 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:21 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:22 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:26 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 15:48:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\config\database.php [ 24 ] in file:line
2014-10-07 15:48:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 15:49:10 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:49:10 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:49:20 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ] in C:\wamp\www\kohana\application\config\database.php:23
2014-10-07 15:49:20 --- DEBUG: #0 C:\wamp\www\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\koh...', 23, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Core.php(829): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('C:\\wamp\\www\\koh...')
#3 C:\wamp\www\kohana\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 C:\wamp\www\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance(NULL)
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#8 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\config\database.php:23
2014-10-07 15:50:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:33 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:34 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:34 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:35 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:35 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:35 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:35 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:36 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:50:36 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:54 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:54 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:55 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:55 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:56 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:51:56 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:29 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:30 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:30 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:31 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:58 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:58 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:59 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:52:59 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:53:16 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:53:16 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:53:16 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 15:53:16 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\wamp\www\kohana\application\classes\Controller\main.php(23): Kohana_Model::factory('user')
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-10-07 19:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 13 ] in C:\wamp\www\kohana\application\views\pages\login.php:13
2014-10-07 19:56:35 --- DEBUG: #0 C:\wamp\www\kohana\application\views\pages\login.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 13, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\application\views\pages\login.php:13
2014-10-07 19:57:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\pages\login.php [ 13 ] in C:\wamp\www\kohana\application\views\pages\login.php:13
2014-10-07 19:57:29 --- DEBUG: #0 C:\wamp\www\kohana\application\views\pages\login.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 13, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\application\views\pages\login.php:13
2014-10-07 19:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 19:58:35 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 19:58:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\layouts\main.php [ 34 ] in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 19:58:44 --- DEBUG: #0 C:\wamp\www\kohana\application\views\layouts\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\layouts\main.php:34
2014-10-07 20:07:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\main.php [ 40 ] in file:line
2014-10-07 20:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 20:18:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:18:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:18:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:18:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:18:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:18:55 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:12 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-10-07 20:19:31 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-10-07 20:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\\wamp\\www\\koh...', 423, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Route.php(423): preg_match('', 'index.php', NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line