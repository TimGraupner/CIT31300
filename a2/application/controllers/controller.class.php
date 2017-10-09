<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
  class controller{

    public $load;
    public $user;

    function __construct(){

      $this->user = new user();
      $this->load = new Load();
      $this->home();

    }

    function home(){
      $this->user->userID = 'tgraupne';
      $this->user->firstname = 'Tim';
      $this->user->lastname = 'Graupner';
      $this->user->email = 'timjgraupner@gmail.com';
      $this->user->role = 'admin';
      $data = $this->user->getName();

      $this->load->view('view.php',$data);


    }



  }
?>
