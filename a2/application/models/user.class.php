<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
  class user extends model{
    public function __construct(){
      parent::__construct();
    }

    public function __set($name,$value){
      $this->$name = $value;
    }

    public function __get($name){
      return $this->$name;
    }
    public function __destruct(){

    }

    function getName(){
      return array(
        $this->userID,
        $this->firstname,
        $this->lastname,
        $this->email,
        $this->role
      );
    }
  }
?>
