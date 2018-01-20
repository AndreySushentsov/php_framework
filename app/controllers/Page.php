<?php
  namespace app\controllers;
  // namespace vendor\core\base;
  /**
   *
   */
  class Page extends \vendor\core\base\Controller{

    public function viewAction{
        debug($this->route);
        echo "Page::view";
    }

  }
