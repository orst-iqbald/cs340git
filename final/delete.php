<?php

include 'connection.php';


$outfitresults = $mysqli->query("SELECT Ou.id AS id, S.name AS shirtname, S.neck AS shirtneck, S.sleeve AS shirtsleeve, S.color AS shirtcolor, S.size AS shirtsize, P.name AS pantname, P.material AS pantmaterial, P.cut AS pantcut, P.color AS pantcolor, P.size AS pantsize, Sh.name AS shoename, Sh.style AS shoestyle, Sh.uses AS shoeuses, Sh.color AS shoecolor, Sh.size AS shoesize 
FROM outfits Ou 
INNER JOIN shirts S ON S.id=Ou.shirtid
INNER JOIN pants P ON P.id=Ou.pantid 
INNER JOIN shoes Sh ON Sh.id=Ou.shoeid");

$shirtresults = $mysqli->query("SELECT id, name, neck, sleeve, color, size FROM shirts");
$pantresults = $mysqli->query("SELECT id, name, material, cut, color, size FROM pants");
$shoeresults = $mysqli->query("SELECT id, name, style, uses, color, size FROM shoes");


echo '<h1> Deleting Outfits & Individual Items </h1>';
echo '<h2> Select the Shirt, Pant or Shoe you want to delete </h2>';
echo '<a href="index.php"> Click here to go back to the Outfits viewing page </a>'; 
echo '<p> Go back to <a href="update.php"> Update Page </a> </p>';


echo '<p> Remember! You have to delete the outfit first if there is an item you want to delete that is present in an existing outfit </p>';
echo '<br>';



echo '<h3> Select which outfit you want to delete </h3>';
echo '<form action="outiftdelete.php" method="GET">';
    echo '<table border="1">';
    echo '<tr>';
    echo '<th> Select Outfit </th>';
    echo '<th> Shirt name </th>';
    echo '<th> Shirt neck </th>';
    echo '<th> Shirt sleeve </th>';
    echo '<th> Shirt color </th>';
    echo '<th> Shirt size </th>';
    echo '<th> Pant name </th>';
    echo '<th> Pant material </th>';
    echo '<th> Pant cut </th>';
    echo '<th> Pant color </th>';
    echo '<th> Pant size </th>';
    echo '<th> Shoe name </th>';
    echo '<th> Shoe style </th>';
    echo '<th> Shoe uses </th>';
    echo '<th> Shoe color </th>';
    echo '<th> Shoe size </th>';
    echo '</tr>';

    while($row = $outfitresults->fetch_assoc()) {
      echo '<tr>';

      echo '<td><input type ="radio"';
      echo 'name = "outfit" ';
      echo 'value ='.$row["id"]. '></td>';

      echo '<td>'.$row["shirtname"].'</td>';
      echo '<td>'.$row ["shirtneck"].'</td>';
      echo '<td>'.$row ["shirtsleeve"].'</td>';
      echo '<td>'.$row ["shirtcolor"].'</td>';
    echo '<th>'.$row["shirtsize"].'</td>';
    echo '<td>'.$row["pantname"].'</td>';
    echo '<td>'.$row["pantmaterial"].'</td>';
    echo '<td>'.$row["pantcut"].'</td>';
    echo '<td>'.$row["pantcolor"].'</td>';
    echo '<td>'.$row["pantsize"].'</td>';
    echo '<td>'.$row["shoename"].'</td>';
    echo '<td>'.$row["shoestyle"].'</td>';
    echo '<td>'.$row["shoeuses"].'</td>';
    echo '<td>'.$row["shoecolor"].'</td>';
    echo '<td>'.$row["shoesize"].'</td>';

      echo '<tr>';
}
      echo '</table>';
echo '<input type="submit" value= "Submit">';
echo '<form>';

echo '<br>';
echo '<h3> Select which individual items, between pants, shirts and shoes you want to delete </h3>';





    echo '<form action="shirtdelete.php">';
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

    echo '<form action="pantdelete.php">';
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


    echo '<form action="shoedelete.php">';
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

    echo '<form action="shirtdelete.php">';
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
     echo '</fieldset>';
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

