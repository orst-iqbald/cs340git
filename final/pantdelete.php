
<?php

ini_set('display_errors', 'On');
include 'connection.php';

  $out_pant = $_GET["pant"];


if (!($stmt = $mysqli->query("DELETE FROM pants WHERE id = '$out_pant' LIMIT 1 "))){
        echo "You need to delete the outfit first";}
else{
header('location: delete.php');
}
?>
~       
