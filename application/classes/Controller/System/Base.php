<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_System_Base extends Controller_Template {

    /**
     * @var A2
     */
   protected $a2;
    /**
     * @var
     */
    protected $a1;
    protected $user;
    /**
     * @var ACL
     */
    protected $acl;
    protected $auth;
    protected $content='';
    protected $css=array();
    protected $js =array();
    protected $title='';
    protected $txt='';
    protected $json = array();

    public function before(){

/*
        $this->a2 = A2::instance();
        $this->user = $this->a2->get_user();

        $this->a2->all
        if (!$this->a2->allowed($this->request->controller(''),$this->request->action(''))) {
            throw new HTTP_Exception_404('Доступ запрещен');
        }*/
      /*  $auth =Auth::instance();

        if($auth->logged_in()){
            Request::initial()->redirect();
        }*/
        $this->template = 'layouts/main';

        parent::before();
    }

    public function after()
    {
        if (is_array($this->json) && count($this->json) > 0)
        {
            $this->response->headers('Content-Type', 'application/json');
            $this->response->body(json_encode($this->json));
        }
        else {
            $this->template->content = $this->content;

            $css = array(
               'css/style.css',
               'css/bootstrap.css',
                'css/bootstrap-responsive.css'
            );
            $js = array(
                '/js/jquery.min.js',
                 //'/js/bootstrap.min.js',
                '/js/jquery-1.11.1.js',
                '/js/jquery.validate.js',
                '/js/jquery.js',
                '/js/adduserp.js'

            );

            $this->template->css = Arr::merge($css, $this->css);
            $this->template->js = Arr::merge($js, $this->js);
            $this->template->title = $this->title;
            $this->template->header = View::factory('layouts/header')->bind('txt', $this->txt);
            $this->template->footer = View::factory('layouts/footer');

            parent::after();
        }
    }

} // End Base