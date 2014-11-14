<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-03 15:55:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: radiot ~ APPPATH\classes\Controller\Admin.php [ 29 ] in C:\wamp\www\kohana\application\classes\Controller\Admin.php:29
2014-11-03 15:55:35 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Admin.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\koh...', 29, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addingus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Admin.php:29
2014-11-03 16:00:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: choose ~ APPPATH\classes\Controller\Admin.php [ 28 ] in C:\wamp\www\kohana\application\classes\Controller\Admin.php:28
2014-11-03 16:00:37 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Admin.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\koh...', 28, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addingus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Admin.php:28