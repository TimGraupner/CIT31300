<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

include_once("classes/user.class.php");
include_once("classes/user_type_1.class.php");
include_once("classes/user_type_2.class.php");

$registered = new registered("Regular User", "timgraupner");

$admin = new admin("Administrator", "robdillon");

$registered->first_name = "Tim";
$registered->last_name = "Graupner";
$registered->email_address = "timjgraupner@gmail.com";

$admin->first_name = "Rob";
$admin->last_name = "Dillon";
$admin->email_address = "rdillon@iupui.edu";

echo "User Level: " . $registered->user_level . "<br/>
  Registered User ID: " . $registered->user_id . "<br/>
  Registered User Type: " . $registered->user_type . "<br/>
  Registered First Name: " . $registered->first_name . "<br/>
  Registered Last Name: " . $registered->last_name . "<br/>
  Registered Email: " . $registered->email_address . "<br/>";
?>
<hr/>
<?php
echo "User Level: " . $admin->user_level . "<br/>
  Admin User ID: " . $admin->user_id . "<br/>
  Admin User Type: " . $admin->user_type . "<br/>
  Admin First Name: " . $admin->first_name . "<br/>
  Admin Last Name: " . $admin->last_name . "<br/>
  Admin Email: " . $admin->email_address . "<br/>";
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
