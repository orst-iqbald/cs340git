<?php
ini_set('display_errors', 'On');
include 'connection.php';

  $out_outfit = $_GET["outfit"];


if (!($stmt = $mysqli->query("DELETE FROM outfits WHERE id = '$out_outfit' LIMIT 1 "))){
    echo 'Somethign went wrong';    
}
else{
header('location: delete.php');
}
?>
~                            
