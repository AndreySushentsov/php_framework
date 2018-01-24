<?php
  namespace app\controllers;

  use app\models\Main;
  use vendor\core\App;

  /**
   *
   */
  class MainController extends AppController{

    public function indexAction()
    {
      // App::$app->getList();
      $model = new Main;
      // $res = $model->query("CREATE TABLE posts SELECT * FROM laravel_blog.posts");
      $posts = $model->findAll();
      App::$app->cache->set('posts', $posts);
      // $post = $model->findOne(7);
      // debug($post);
      // $data = $model->findLike('With', 'title');
      // debug($data);
      // $this->view = 'test';
      $name = 'My Name';
      // $this->set(compact('name','posts'));
      $this->set(['name'=>$name, 'posts'=>$posts]);
    }

  }
