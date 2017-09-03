<?php
	include("_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
?>
<?php
  $favorites=array("Tim Graupner", "Red", "Airplane!", "Harry Potter", "twitch.tv");
  echo "<h1>" . $favorites[0] . "</h1>";
  function writeList($fav){
    $arrlength = count($fav);
    echo("<ul>");
    for($x = 1; $x < $arrlength; $x++){
      echo("<li>");
      echo $fav[$x];
      echo("</li>");
    }
    echo("</ul>");
  }
  writeList($favorites);
?>

<?php
  include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>
