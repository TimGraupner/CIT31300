<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
  abstract class model{
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    public function __construct(){
      //Will be revisited
    }


    public function __set($name,$value){
      $this->$name = $value;
    }

    public function __get($name){
      return $this->$name;
    }
    public function __destruct(){

    }
  }
?>
