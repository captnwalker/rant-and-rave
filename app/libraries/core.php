<?php
    /*
    App Core Class
    Creates URL and loads core controler
    URL Format - /controller/methods/params
    */
    class Core {
        protected $currentController = 'Pages';
        protected $curretnMethod = 'index';
        protected $params = [];

        public function __construct() {
            //print_r($this->getUrl());

            $url = $this->getUrl();

            // Look in controllers for first value
            // ucwords caps first letter then add .php extension
            if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
                // If exists, set as controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 index
                unset($url[0]);
            }

            // Require controller
            require_once '../app/controllers/'. $this->currentController . '.php';

            // Instantiate controller class
            $this->currentController = new $this->currentController;
        }

        // Get, Sanitize and Format URL returned in browser address bar
        public function getUrl() {
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }