<?php
ini_set('display_errors', 'On');
include 'connection.php';


  $out_name = $_GET["name"];
  $out_style = $_GET["style"];
  $out_uses = $_GET["uses"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

if(!$out_name || !$out_style || !$out_uses || !$out_color || !$out_size){
  echo "you need to enter in all required details";
  exit;
  }

$mysqli->query("INSERT INTO shoes(id, name, style, uses, color,  size) VALUES ('NULL', '$out_name', '$out_style', '$out_uses', '$out_color', '$out_size')");

?>
