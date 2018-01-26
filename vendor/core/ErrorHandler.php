<?php
  namespace vendor\core;

    /**
     *
     */

     define('DEBUG', 1);


    class ErrorHandler
    {

      public function __construct()
      {
        if(DEBUG){
          error_reporting(-1);
        }else{
          error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
      }

      // Обработчик ошибок типа Notice
      public function errorHandler($errno, $errstr, $errfile, $errline)
      {
        $this->displayError($errno, $errstr, $errfile, $errline);
        return true;
      }

      // Обработчик фатальных ошибок
      public function fatalErrorHandler()
      {
        $error = error_get_last();
        if(!empty($error) AND $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)){
          ob_end_clean();
          $this->displayError($error['type'],$error['message'],$error['file'],$error['line'] );
        }else{
          ob_end_flush();
        }
      }

      // Обработчик исключений
      public function exceptionHandler(Exception $e)
      {
        $this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
      }


      // Отображение страницы с ошибкой
      protected function displayError($errno, $errstr, $errfile, $errline, $response = 500)
      {
        http_response_code($response);
        if($response == 404){
          require APP . '/views/errors/404.html';
          die;
        }
        if(DEBUG){
          require APP . '/views/errors/dev.php';
        }else{
          require '/views/errors/prod.php';
        }
        die;
      }
    }
