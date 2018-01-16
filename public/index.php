<?php
  echo $query = rtrim($_SERVER['QUERY_STRING'], '/');

  require '../vendor/core/Router.php';
  require '../vendor/libs/functions.php';

  Router::add('posts/new', ['controller'=>'posts', 'action'=>'add']);

  debug(Router::getRoutes());

  if(Router::matchRoute($query)){
    debug(Router::getRoute());
  }else{
    echo "404";
  }
