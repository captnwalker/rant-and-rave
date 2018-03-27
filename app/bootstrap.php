<?php
    // Load Config
    require_once 'config/config.php';

    // Load Helpers
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';

    /*
    * Autoloader for Core Libraries
    * Loads ALL Core Libraries without having to require each one individually
    */
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });