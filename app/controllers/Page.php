<?php
  namespace app\controllers;
  namespace vendor\core\base;
  /**
   *
   */
  class Page extends Controller{

    public function viewAction{
        debug($this->route);
        echo "Page::view";
    }

  }
