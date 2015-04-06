<?php
include 'connection.php';
  $out_name = $_GET["shoe"];

echo '<h1> Update the Shoe </h1>';
echo '<h2> The old values are by the colon, Enter in new values </h2>';
echo '<h3> You must enter in a value for each input box </h3>';
echo '<br>';
$shirtresults = $mysqli->query("SELECT * FROM shoes WHERE id='$out_name'");
        echo '<form action="shoeupdate1.php">';
      
  while($shirtrow = $shirtresults->fetch_assoc()) {
        echo '<input type="hidden" name="id" value='.$out_name;
        echo '>';
        echo 'Name: ';
        echo $shirtrow["name"];
        echo '<input type ="text" name="name">';  
        echo '<br>';
        echo 'Style: ';
        echo $shirtrow["style"];
        echo '<input type="text" name="style">';
        echo '<br>';
        echo 'Uses: ';
        echo $shirtrow["uses"];
        echo '<input type="text" name="uses">';                  
        echo '<br>';
        echo 'Color: ';
        echo $shirtrow["color"];
        echo '<input type="text" name="color">';
        echo '<br>';
        echo 'Size: ';
        echo $shirtrow["size"]; 
        echo '<input type="text" name="size">';
        echo '<br>';
        }
        echo '<input type="submit" value="submit">';
        echo '</form>';

?>
