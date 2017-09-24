<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

function autoload($class){
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('autoload');
$admin = new admin("newuser", "regular");
$admin->first_name =  ($_POST["fname"]);
$admin->last_name =  ($_POST["lname"]);
$admin->email_address =  ($_POST["email"]);
echo "The registered user's first name is: " . $admin->first_name . "<br/>
The registered user's last name is: " . $admin->last_name . "<br/>
The registered user's email address is: " . $admin->email_address . "<br/>
<hr/>Processing Complete";

?>
<!DOCTYPE html>
<html>
<head>
  <title>OOP</title>
</head>
<body>
  <?php



  ?>
</body>
</html
