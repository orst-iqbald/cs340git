<?php

ini_set('display_errors', 'On');
include 'connection.php';

  $out_id = $_GET["id"];
  $out_name = $_GET["name"];
  $out_material = $_GET["material"];
  $out_cut = $_GET["cut"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

$mysqli->query("UPDATE pants SET name='$out_name', material='$out_material', cut='$out_cut', color='$out_color', size='$out_size' WHERE id='$out_id'");

header('location:update.php');


?>
