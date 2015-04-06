<?php
ini_set('display_errors', 'On');
include 'connection.php';


  $out_username = $_GET["username"];

if(!$out_username){
  echo "you need to enter in all required details";
  exit;
  }
else{
$mysqli->query("INSERT INTO outfitusers(id, username) VALUES ('NULL', '$out_username')");
header('location: customerlikes.php');
}


?>
