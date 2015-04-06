<?php
ini_set('display_errors', 'On');
include 'connection.php';


  $out_name = $_GET["name"];
  $out_material = $_GET["material"];
  $out_cut = $_GET["cut"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

if(!$out_name || !$out_material || !$out_cut || !$out_color || !$out_size){
  echo "you need to enter in all required details";
  exit;
  }

$mysqli->query("INSERT INTO pants(id, name, material, cut, color,  size) VALUES ('NULL', '$out_name', '$out_material', '$out_cut', '$out_color', '$out_size')");

?>
