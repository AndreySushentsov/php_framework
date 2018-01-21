<?php
  namespace app\controllers;
  use app\models\Main;

  /**
   *
   */
  class MainController extends AppController{

    public function indexAction()
    {
      $model = new Main;
      // $res = $model->query("CREATE TABLE posts SELECT * FROM laravel_blog.posts");
      $posts = $model->findAll();
      $this->view = 'test';
      $name = 'My Name';
      // $this->set(compact('name','posts'));
      $this->set(['name'=>$name, 'posts'=>$posts]);
    }

  }
