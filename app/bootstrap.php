<?php
    // Load Config
    require_once 'config/config.php';

    /*
    * Autoloader for Core Libraries
    * Loads ALL Core Libraries without having to require each one individually
    */
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });