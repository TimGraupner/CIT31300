<?php
class admin extends user {

  public function __construct($user_level,$user_id){
      parent::__construct($user_level);
      $this->user_id = $user_id;
      $this->user_type = 2;
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
