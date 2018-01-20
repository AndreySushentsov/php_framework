<?php

  namespace vendor\core\base;


  /**
   *
   */
  abstract class Controller
  {
    $route = [];

    public function __construct($route)
    {
      $this->route = $route;
    }
  }
