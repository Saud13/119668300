<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        // This will return a broken up URL
        // it will be /controller/method
        $url = $this->parseUrl();

        print_r($url);
        /* if controller exists in the URL, then go to it
         * if not, then go to this->controller which is defaulted to home 
         */
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        } 

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // check to see if method is passed
        // check to see if it exists
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // This will rebase the params to a new array (starting at 0)
        // if params exist
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);		
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            //trims the trailing forward slash (rtrim), sanitizes URL, explode it by forward slash to get elements
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
