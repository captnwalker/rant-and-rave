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
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => ''
                ];

                // Load view
                $this->view('users/register', $data);
            }
        }
    }
