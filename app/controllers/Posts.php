<?php
    class Posts extends Controller {
        // Check to see if user login to access posts page
        public function __construct(){
            if(!isLoggedin()){
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }

        public function index(){
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];

            $this->view('posts/index', $data);
        }
    }