<?php
ini_set('display_errors', 'On');
include 'connection.php';


  $out_oshirt = $_GET["shirt"];
  $out_opant = $_GET["pant"];
  $out_oshoe = $_GET["shoe"];

//if(!$out_name || !$out_neck || !$out_sleeve || !$out_color || !$out_size){
 // echo "you need to enter in all required details";
 // exit;
 // }

$mysqli->query("INSERT INTO outfits(id, shirtid, pantid, shoeid) VALUES ('NULL', '$out_oshirt', '$out_opant', '$out_oshoe')"); 


// ('NULL', SELECT id FROM shirts WHERE name = $out_oshirt, SELECT id FROM pants WHERE name= $out_opant, SELECT id FROM shoes WHERE name = $out_oshoe)");

?>

