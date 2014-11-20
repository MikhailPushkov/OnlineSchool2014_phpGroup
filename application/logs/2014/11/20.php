<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-20 00:13:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Auth.php [ 18 ] in C:\wamp\www\new\application\classes\Controller\Auth.php:18
2014-11-20 00:13:24 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 18, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Auth.php:18
2014-11-20 00:14:00 --- CRITICAL: ErrorException [ 1 ]: Call to protected A1_Core::__construct() from context 'Kohana_ORM' ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-11-20 00:14:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 00:16:26 --- CRITICAL: ErrorException [ 1 ]: Call to protected A1_Core::__construct() from context 'Kohana_ORM' ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-11-20 00:16:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 12:21:02 --- CRITICAL: ErrorException [ 1 ]: Call to protected A1_Core::__construct() from context 'Kohana_ORM' ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-11-20 12:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 12:40:38 --- CRITICAL: ErrorException [ 1 ]: Call to protected A1_Core::__construct() from context 'Kohana_ORM' ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-11-20 12:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 12:43:10 --- CRITICAL: ErrorException [ 1 ]: Call to protected A1_Core::__construct() from context 'Kohana_ORM' ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-11-20 12:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 15:55:08 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete teacher model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:79
2014-11-20 15:55:08 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(79): Kohana_ORM->delete()
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delusers()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:79
2014-11-20 16:19:50 --- CRITICAL: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_Pupil class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:19:50 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('confirm_passwor...')
#1 C:\wamp\www\new\application\views\pages\admin\updateuserp.php(100): Kohana_ORM->__get('confirm_passwor...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#4 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#6 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#8 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\new\application\classes\Controller\System\Base.php(81): Kohana_Controller_Template->after()
#10 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:20:44 --- CRITICAL: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_Pupil class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:20:44 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('confirm_passwor...')
#1 C:\wamp\www\new\application\views\pages\admin\updateuserp.php(100): Kohana_ORM->__get('confirm_passwor...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#4 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#6 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#8 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\new\application\classes\Controller\System\Base.php(81): Kohana_Controller_Template->after()
#10 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:22:28 --- CRITICAL: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Pupil class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:22:28 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date')
#1 C:\wamp\www\new\application\views\pages\admin\updateuserp.php(106): Kohana_ORM->__get('date')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#4 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#6 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#8 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\new\application\classes\Controller\System\Base.php(81): Kohana_Controller_Template->after()
#10 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:22:37 --- CRITICAL: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Pupil class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 16:22:37 --- DEBUG: #0 C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date')
#1 C:\wamp\www\new\application\views\pages\admin\updateuserp.php(106): Kohana_ORM->__get('date')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#4 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#6 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#8 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\new\application\classes\Controller\System\Base.php(81): Kohana_Controller_Template->after()
#10 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\new\modules\orm\classes\Kohana\ORM.php:603
2014-11-20 17:55:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: radio ~ APPPATH\classes\Controller\Admin.php [ 22 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:22
2014-11-20 17:55:13 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 22, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addingus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:22
2014-11-20 18:12:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: combo ~ APPPATH\classes\Controller\Admin.php [ 34 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:12:59 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 34, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_rasp()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:13:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: combo ~ APPPATH\classes\Controller\Admin.php [ 34 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:13:55 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 34, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_rasp()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:14:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: combo ~ APPPATH\classes\Controller\Admin.php [ 34 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:14:06 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 34, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_rasp()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: combo ~ APPPATH\classes\Controller\Admin.php [ 34 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-20 18:14:47 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 34, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_rasp()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:34