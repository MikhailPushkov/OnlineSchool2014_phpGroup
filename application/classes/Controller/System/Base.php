<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_System_Base extends Controller_Template {

    /**
     * @var A2
     */
   protected $a2;
    /**
     * @var A1
     */
    protected $a1;
    protected $user;
    /**
     * @var ACL
     */
    protected $acl;
    /**
     * @var Session
     */
    protected $session;
    protected $content='';
    protected $css=array();
    protected $js =array();
    protected $title='';
    protected $txt='';
    protected $json = array();
    public function before(){
    	 $this->a2 =A2::instance();
         $this->a1 = $this->a2->auth();
         $this->user = $this->a1->get_user();
         if (!$this->a1->logged_in() && (strtolower($this->request->controller()) != 'auth')) {
         	Message::error('Для доступа к системе необходима авторизация.');
         	$this->redirect('auth');
         }
         $this->template = 'layouts/main';
         parent::before();
    }

    public function after() {
    	if (is_array($this->json) && count($this->json) > 0) {
            $this->response->headers('Content-Type', 'application/json');
            $this->response->body(json_encode($this->json));
        } else {
        	$this->template->content = $this->content;

            $css = array(
            		'/css/style.css',
            		'/css/template.css',
            		'/js/jquery-ui.min.css',
            		'/js/jquery-ui.core.min.css',
            		'/js/jquery-ui.theme.min.css',
             		'css/bootstrap.css',
             		'css/bootstrap-responsive.css'
            );
            $js = array(
                '/js/jquery-1.11.1.js',
//                '/js/jquery.min.js',
            	'/js/jquery-ui.min.js',
                '/js/bootstrap.min.js',
            	'/js/jquery.validate.js',
                '/js/adduserp.js'

            );
            $this->template->css = Arr::merge($css, $this->css);
            $this->template->js = Arr::merge($js, $this->js);
            $this->template->title = $this->title;
            $this->template->header = View::factory('layouts/header')->bind('txt', $this->txt)->bind('user',$this->user);
            $this->template->footer = View::factory('layouts/footer');

            parent::after();
        }
    }

} // End Base