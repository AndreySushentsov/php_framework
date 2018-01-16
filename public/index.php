<?php
  echo $query = rtrim($_SERVER['QUERY_STRING'], '/');

  require '../vendor/core/Router.php';
  require '../vendor/libs/functions.php';
  require '../app/controllers/Main.php';
  require '../app/controllers/Post.php';    


  Router::add('^$', ['controller'=>'posts', 'action'=>'add']);
  Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

  // debug(Router::getRoutes());

  Router::dispatch($query);
  // if(Router::matchRoute($query)){
  //   debug(Router::getRoute());
  // }else{
  //   echo "404";
  // }
