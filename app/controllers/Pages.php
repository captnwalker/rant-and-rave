<?php
  class Pages extends Controller {
    public function __construct(){

    }

    // Redirect HOME link to Posts of user is logged in
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }


      $data = [
        'title' => 'Rant and Rave',
        'description' => 'Shout into the Digital Abyss'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'An app to to help you vent your frustrations. Don\'t bottle up your feelings, Shout into the Digital Abyss!'
      ];

      $this->view('pages/about', $data);
    }
  }