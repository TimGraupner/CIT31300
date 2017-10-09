<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  function autoload($class){
    if(file_exists('controllers/'.strtolower($class). '.class.php')){
        include_once('controllers/'.strtolower($class).'.class.php');
      }
      if(file_exists('models/'.strtolower($class). '.class.php')){
        include_once('models/'.strtolower($class).'.class.php');
      }
      if(file_exists('application/'.strtolower($class).'.class.php')){
        include_once('application/'.strtolower($class).'.class.php');
      }
  }
  spl_autoload_register('autoload');

  new controller();

?>
