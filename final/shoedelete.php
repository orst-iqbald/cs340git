<?php

ini_set('display_errors', 'On');
include 'connection.php';

  $out_shoe = $_GET["shoe"];


if (!($stmt = $mysqli->query("DELETE FROM shoes WHERE id = '$out_shoe' LIMIT 1 "))){
        echo "You need to delete the outfit first";}
else{
header('location: delete.php');
}
?>
