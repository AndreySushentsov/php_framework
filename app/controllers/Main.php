<?php
  namespace app\controllers;
  /**
   *
   */
  class Main extends App{

    public $layout = 'main';


    public function indexAction()
    {
      // $this->layout = false;
      // $this->layout = 'main';
      $this->view = 'test';
      $name = 'My Name';
      $this->set(['name'=>$name]);
    }

  }
