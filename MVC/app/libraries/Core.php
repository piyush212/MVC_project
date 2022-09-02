<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();

      // Look in controllers for first value
      // if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
      //   // If exists, set as controller
      //   // file_exists Checks whether a file or directory exists.
      //   $this->currentController = ucwords($url[0]); // ucwords - Uppercase the first character of each word in a string

      //   // Unset 0 Index
      //   unset($url[0]);
      // }

      // Require the controller
      require_once '../app/controllers/'. $this->currentController . '.php';
      // The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.
      // Instantiate controller class
      $this->currentController = new $this->currentController; // $this - Refers to the current object.

      // Check for second part of url
      if(isset($url[1])){ // isset- Determine if a variable is declared and is different than NULL.
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1]; //Checks if the class method exists
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : []; // array_values :- Return all the values of an array

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/'); //rtrim :- Strip whitespace (or other characters) from the end of a string.
        $url = filter_var($url, FILTER_SANITIZE_URL); //filter_var:-Filters a variable with a specified filter
         // FILTER_SANITIZE_URL :- ID of "url" filter.
        $url = explode('/', $url); // explode:- Split a string by a string
        return $url;
      }
    }
  } 
  
  