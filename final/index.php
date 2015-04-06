<?php
include 'connection.php';
//select query
echo '<html>';
echo '<body>';
echo '<h1> Your Outfit Compiler </h1>';
echo '<h2> Make Outfits from our existing shirs, pants and shoes </h2>';
echo '<h3> See the outifts you have created in the table below </h3>';

echo '<p> See the outfits our users have <a href="customerlikes.php"> Liked </a> <p>';
echo '<p> Go back to <a href="update.php"> Update Page </a> </p>';
echo '<p> Go to <a href="delete.php"> Delete Page </a> </p>';
echo '<p> Add an additional user </p>';
echo '<form action="add_user.php" method="get">';
echo 'Username <input type="text" name="username">';
echo '<input type="submit" value="Add User">';
echo '</form>';

$shirtresults = $mysqli->query("SELECT id, name, neck, sleeve, color, size FROM shirts");
$pantresults = $mysqli->query("SELECT id, name, material, cut, color, size FROM pants");
$shoeresults = $mysqli->query("SELECT id, name, style, uses, color, size FROM shoes");
$outfitresults = $mysqli->query("SELECT S.name AS shirtname, S.neck AS shirtneck, S.sleeve AS shirtsleeve, S.color AS shirtcolor, S.size AS shirtsize, P.name AS pantname, P.material AS pantmaterial, P.cut AS pantcut, P.color AS pantcolor, P.size AS pantsize, Sh.name AS shoename, Sh.style AS shoestyle, Sh.uses AS shoeuses, Sh.color AS shoecolor, Sh.size AS shoesize 
FROM outfits Ou 
INNER JOIN shirts S ON S.id=Ou.shirtid
INNER JOIN pants P ON P.id=Ou.pantid 
INNER JOIN shoes Sh ON Sh.id=Ou.shoeid");


echo '<div>';
    echo '<table border="1">';
    echo '<tr>';
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
echo '</div>';

echo '<div>';
echo '<h2> Want to create more outfits?! <h2>';
echo '<h3> Select the shirts, pants and shoes you would like to create them! </h3>';
    echo '<form action="add_outfit.php">';
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

echo '</div>';


echo'
<p>
<div>
<ul>
	<li><a href="delete.php"><b> You can Delete the items in the outfits here. Remember that an outfit will be deleted automatically if one of its items is deleted rom the database </b></a></li>
<h2> Add a Shirt to the Database </h2>
  <form action ="add_shirt.php" method="get">
    <table border="0">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Neck</td>
        <td><input type="text" name="neck"></td>
      </tr>
      <tr>
        <td>Sleeve</td>
        <td><input type="text" name="sleeve"></td>
      </tr>
      <tr>
        <td>Color</td>
        <td><input type="text" name="color"></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" name="size"></td>
      </tr>
        <td><input type="submit" value="Add"></td>
      </tr>
    </table>
   </form>
<h2> Add a Pant to the Database </h2>
     <form action ="add_pants.php" method="get">
    <table border="0">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Material</td>
        <td><input type="text" name="material"></td>
      </tr>
      <tr>
        <td>Cut</td>
        <td><input type="text" name="cut"></td>
      </tr>
      <tr>
        <td>Color</td>
        <td><input type="text" name="color"></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" name="size"></td>
      </tr>
        <td><input type="submit" value="Add"></td>
      </tr>
    </table>
   </form>
<h2> Add a Shoe to the Database </h2>
     <form action ="add_shoes.php" method="get">
    <table border="0">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Style</td>
        <td><input type="text" name="style"></td>
      </tr>
      <tr>
        <td>Uses</td>
        <td><input type="text" name="uses"></td>
      </tr>
      <tr>
        <td>Color</td>
        <td><input type="text" name="color"></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" name="size"></td>
      </tr>
        <td><input type="submit" value="Add"></td>
      </tr>
    </table>
   </form>
</div>
</body>
</html>';

?>



