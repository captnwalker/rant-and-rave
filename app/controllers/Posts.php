<?php
    class Posts extends Controller {
        // Check to see if user login to access posts page
        public function __construct(){
            if(!isLoggedin()){
                redirect('users/login');
            }
        }

        public function index(){
            $data = [];

            $this->view('posts/index');
        }
    }