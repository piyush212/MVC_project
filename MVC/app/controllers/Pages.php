<?php
 
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Post',
      ];
     
      $this->view('pages/index', $data);
      $this->view('pages/single', $data);
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function save()
    {  
      $models = $this->model('upload');
      $models->insert();
      $this->view('pages/Welcome');
    
    }

    
      public function dis()
    {
      session_start();
     $posts = $this->model('upload');
     $values = $posts->fetchsingleData();
  
     if($_POST['one'] != null){
    if($values->User_name == $_POST['one'] && $values->password == $_POST['pass'])
    {
      $_SESSION['user'] =$_POST['one'];
      echo "login succesfully done" ;
      echo '<br>';
      echo '<br>';
      echo 'Welcome            ' .$_SESSION['user']; 
      $this->view('pages/comment');
    }
    
    else {
      echo "incorrect password";
    }
    }
    else{
       echo "please enter user name & password";
    }
  }
  
    public function sin()
    {
      $models = $this->model('upload');
     $post = $models->singledata();
     $data = [
      'post' => $post
     ];
     $this->view('pages/single',$data);
    
     
    }
    public function signin()
    {
      $this->view('pages/signup');
    }

    public function forg()
    {
      $this->view('pages/forget');
    }


    public function post()
    {
      if($_POST['user2'] != null){
      $models = $this->model('upload');
      $models->update();
      echo "done";
      }
      else{
        echo "please Enter user id ";
      }
    }


    public function allpost()
    {
      $models = $this->model('upload');
      $values = $models->Alldata();
   
      $data = [
        'post' => $values
       ];
       $this->view('pages/posts', $data);

      

    }
    
    public function logout()
    {
      session_start();
      // echo "thank you for visiting ";
      session_unset();
      session_destroy();
      $this->view('pages/index');
    }
    
  
  }