<?php
    class Users extends Controller {
        public function __construct(){
            
        }

        public function register(){
            // Checking for posts
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            } else {
                // Init data
                // Handle partial data so user does not have to re-enter all
                $data =[
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                // Load view
                $this->view('users/register', $data);
            }
        }

        public function login(){
            // Checking for posts
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            } else {
                // Init data
                // Handle partial data so user does not have to re-enter all
                $data =[
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];

                // Load view
                $this->view('users/login', $data);
            }
        }
    }
