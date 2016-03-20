<?php

  class homepageController extends controller {

    public function get() {
      var $carController;
      $carController = '<a href="index.php?controller=carController">CarController</a>';
      session_start();
      $this->html = $carController . buildTable($_SESSION);
    }

    public function post() {}

    public function put() {}

    public function delete() {}

    public function buildTable($array) {

      return '<h1>Buttsex</h1>';
      /*
      var $table;
      $this->table = '<table><thead><tr><th>';
      $this->table .= implode('</th><th>', array_keys($array[0]->get_vals()));
      $this->table .= '</th></tr></thead><tbody>';
      foreach ($array as $element){
        $this->table .= '<tr><td>';
        $this->table .= implode('</td><td>', $element->get_vals());
        $this->table .= '</td></tr>';
      }
      return $table;
      */
    }

  }
