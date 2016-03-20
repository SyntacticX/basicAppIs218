<?php

  class app {

    public function __construct() {
     $controller = 'homepageController';
     if(isset($_REQUEST['controller'])) {
       $controller = $_REQUEST['controller'];

     }

     $route = new $controller;
     $request_method = $_SERVER['REQUEST_METHOD'];
     $route->$request_method();
     $page_output = $route->getHTML();
     $page_output .= '<h1>Luna Bear is the best</h1>'
     echo $page_output;
    }
  }
