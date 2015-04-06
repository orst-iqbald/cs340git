<?php
ini_set('display_errors', 'On');
include 'connection.php';


  $out_name = $_GET["name"];
  $out_neck = $_GET["neck"];
  $out_sleeve = $_GET["sleeve"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

if(!$out_name || !$out_neck || !$out_sleeve || !$out_color || !$out_size){
  echo "you need to enter in all required details";
  exit;
  }
else{
$mysqli->query("INSERT INTO shirts(id, name, neck, sleeve, color, size) VALUES ('NULL', '$out_name', '$out_neck', '$out_sleeve', '$out_color', '$out_size')");
header('location: index.php');
}


?>
