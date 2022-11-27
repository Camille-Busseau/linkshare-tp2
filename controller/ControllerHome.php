<?php

class ControllerHome{

    public function index(){

      $data =['name' =>'Camille', 
              'welcome' => 'Welcome'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }
}