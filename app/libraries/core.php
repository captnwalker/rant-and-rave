<?php
    /*
    App Core Class
    Creates URL and loads core controler
    URL Format - /controller/methods/params
    */
    class Core {
        protected $currentController = 'Pages';
        protected $curretnMethod = 'indes';
        protected $params = [];

        public function __construct() {
            $this->getUrl();
        }

        public function getUrl() {
            echo $_GET['url'];
        }
    }