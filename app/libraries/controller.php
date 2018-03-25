<?php
    /*
    * Base Controller
    * Loads models and views
    */
    class Controller {
        // Load the model
        public function model($model){
            //Require the models file
            require_once '../app/models/' . $model . '.php';

            // Instantiate the model
            return new $model();
        }

        // Load the view
        public function view($view, $data = []){
            // Check for the view file
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else {
                // Kill it if view does not exist
                die('View does not exist');
            }
        }
    }