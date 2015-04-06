<?php
ini_set('display_errors', 'On');
include 'connection.php';

  $out_oshirt = $_GET["shirt"];


if (!($stmt = $mysqli->query("DELETE FROM shirts WHERE id = '$out_oshirt' LIMIT 1 "))){
	echo "You need to delete the outfit first";
}
else{
header('location: delete.php');
}
?>
