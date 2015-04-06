
<?php

include 'connection.php';


$shirtresults = $mysqli->query("SELECT id, name, neck, sleeve, color, size FROM shirts");
$pantresults = $mysqli->query("SELECT id, name, material, cut, color, size FROM pants");
$shoeresults = $mysqli->query("SELECT id, name, style, uses, color, size FROM shoes");



echo '<h1> Update Shirts, Pants, and Shoes </h1>';
echo '<p> Go back to <a href="index.php"> View Page </a> </p>';
echo '<p> Go to <a href="delete.php"> Delete Page </a> </p>'; 


echo '<form action="shirtupdate.php">';
    echo '<fieldset>';
    echo 'Select shirt';
    echo '<br>';
    while($shirtrow = $shirtresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "shirt" ';
      echo 'value ='.$shirtrow["id"];
      echo ">";
      echo " Shirt name: ";
      echo $shirtrow["name"];
      echo " Shirt neck: ";
      echo $shirtrow["neck"];
      echo " Shirt sleeve: ";
      echo $shirtrow["sleeve"];
      echo " Shirt color: ";
      echo $shirtrow["color"];
      echo " Shirt size: ";
      echo $shirtrow["size"];
      echo '<br>';
      }
    echo '</fieldset>';
     echo '<input type ="submit" value ="Submit">';
     echo '</form>';

    echo '<form action="pantupdate.php">';
    echo '<fieldset>';
    echo 'Select Pant';
    echo '<br>';
    while($pantrow = $pantresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "pant" ';
      echo 'value ='.$pantrow["id"];
      echo ">";
      echo " Pant name: ";
      echo $pantrow["name"];
      echo " Pant material: ";
      echo $pantrow["material"];
     echo " Pant cut: ";
      echo $pantrow["cut"];
      echo " Pant color: ";
      echo $pantrow["color"];
      echo " Pant size: ";
      echo $pantrow["size"];
      echo '<br>';
      }
    echo '</fieldset>';
    echo '<input type ="submit" value ="Submit">';
    echo '</form>';


    echo '<form action="shoeupdate.php">';
    echo '<fieldset>';
    echo 'Select Shoe';
    echo '<br>';
    while($shoerow = $shoeresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "shoe" ';
      echo 'value ='.$shoerow["id"];
      echo ">";
      echo "Shoe Name: ";
      echo $shoerow["name"];
      echo " Shoe style: ";
      echo $shoerow["style"];
      echo " Shoe uses: ";
      echo $shoerow["uses"];
      echo " Shoe color: ";
      echo $shoerow["color"];
      echo " Shoe size: ";
      echo $shoerow["size"];
      echo '<br>';
      }
    echo '</fieldset>';
    echo '<input type ="submit" value ="Submit">';
    echo '</form>';

/*
    echo '<form action="shirtupdate.php">';
    echo '<fieldset>';
    echo 'Select shirt';
    echo '<br>';

    while($shirtrow = $shirtresults->fetch_assoc()){
          echo '<input type ="radio"';
      echo 'name = "shirt" ';
      echo 'value ='.$shirtrow["id"];
      echo ">";
      echo $shirtrow["name"];
      echo $shirtrow["neck"];
      echo $shirtrow["sleeve"];
      echo $shirtrow["color"];
      echo $shirtrow["size"];
      echo '<br>';
      }  

/*
foreach ($shirtrow as $row){
      echo '<input type ="radio"';
      echo 'name = "shirt" ';
      echo 'value ='.$row;
      echo ">";
      echo $row;
      }
  */

/*
    echo '<input type ="submit" value ="Submit">';
    echo '</form>';                                                                                                                     


    echo '<form action="delete_pant.php">';
    echo '<fieldset>';
    while($pantrow = $pantresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "pant" ';
      echo 'value ='.$pantrow["id"];
      echo ">";
      echo $pantrow["name"];
      echo $pantrow["material"];
      echo $pantrow["cut"];
      echo $pantrow["color"];
      echo $pantrow["size"];
      echo '<br>';
      }
     echo '</fieldset>';
     echo '<input type ="submit" value ="Submit">';
     echo '</form>';

    echo '<form action="delete_shoe.php">';
    echo '<fieldset>';
    while($shoerow = $shoeresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "shoe" ';
      echo 'value ='.$shoerow["id"];
      echo ">";
      echo $shoerow["name"];
      echo $shoerow["style"];
      echo $shoerow["uses"];
      echo $shoerow["color"];
      echo $shoerow["size"];
      echo '<br>';
      }
     echo '</fieldset>';

     echo '<input type ="submit" value ="Submit">';
     echo '</form>';
*/

?>
