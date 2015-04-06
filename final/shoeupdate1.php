<?php

ini_set('display_errors', 'On');
include 'connection.php';

  $out_id = $_GET["id"];
  $out_name = $_GET["name"];
  $out_style = $_GET["style"];
  $out_uses = $_GET["uses"];
  $out_color = $_GET["color"];
  $out_size = $_GET["size"];

$mysqli->query("UPDATE shoes SET name='$out_name', style='$out_style', uses='$out_uses', color='$out_color', size='$out_size' WHERE id='$out_id'");

header ('location: update.php');

?>
