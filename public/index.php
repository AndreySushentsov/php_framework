<?php
  use vendor\core\Router;

  $query = rtrim($_SERVER['QUERY_STRING'], '/');

  define('WWW', __DIR__);
  define('CORE', dirname(__DIR__) . '/vendor/core');
  define('ROOT', dirname(__DIR__));
  define('APP', dirname(__DIR__) . '/app');
  define('CACHE', dirname(__DIR__) . '/tmp/cache');
  define('LAYOUT', 'default');

  // require '../vendor/core/Router.php';
  require '../vendor/libs/functions.php';
  // require '../app/controllers/Main.php';
  // require '../app/controllers/Posts.php';

  spl_autoload_register(function($class){

      $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';

      if(is_file($file)){
        require_once $file;
      }
  });

  new \vendor\core\App;

  Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=>'Page']);
  Router::add('^page/(?P<alias>[a-z-]+)$', ['controller'=>'Page', 'action'=>'view']);

  Router::add('^$', ['controller'=>'main', 'action'=>'index']);
  Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

  // debug(Router::getRoutes());

  Router::dispatch($query);
  // if(Router::matchRoute($query)){
  //   debug(Router::getRoute());
  // }else{
  //   echo "404";
  // }
