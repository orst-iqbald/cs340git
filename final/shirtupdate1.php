<?php

ini_set('display_errors', 'On');
include 'connection.php';

  $out_id = $_GET["id"];
  $out_name = $_GET["name"];
  $out_neck = $_GET["neck"];
  $out_sleeve = $_GET["sleeve"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

$mysqli->query("UPDATE shirts SET name='$out_name', neck='$out_neck', sleeve='$out_sleeve', color='$out_color', size='$out_size' WHERE id='$out_id'");

header('loction: update.php');

?>
