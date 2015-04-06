<?php
    ini_set('display_errors', 'On');
    include 'connection.php';


      $out_userid = $_GET["username"];
      $out_outfitid = $_GET["outfit"];

    if(!$out_userid || !$out_outfitid ){
      echo "you need to enter in all required details";
      exit;
      }
    else{
    $mysqli->query("INSERT INTO likes(uid, ouid) VALUES ('$out_userid', '$out_outfitid')");
  //  header('location: customerlikes.php');
    }


    ?>
