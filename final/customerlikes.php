<?php
include 'connection.php';
//select query
echo '<html>';
echo '<body>';
echo '<h1> Which Outfit do you Like </h1>';
echo '<h2> Select which user you are and which outfit you like </h2>';
echo '<p> Go to the <a href="index.php"> Home Page  </a> </p>';
echo '<p> Go back to <a href="update.php"> Update Page </a> </p>';
echo '<p> Go to <a href="delete.php"> Delete Page </a> </p>';


$likeresults = $mysqli->query("SELECT U.username AS username, S.name AS shirtname, S.neck AS shirtneck, S.sleeve AS shirtsleeve, S.color AS shirtcolor, S.size AS shirtsize, P.name AS pantname, P.material AS pantmaterial, P.cut AS pantcut, P.color AS pantcolor, P.size AS pantsize, Sh.name AS shoename, Sh.style AS shoestyle, Sh.uses AS shoeuses, Sh.color AS shoecolor, Sh.size AS shoesize 
FROM outfitusers U
INNER JOIN likes L ON L.uid=U.id
INNER JOIN outfits Ou ON Ou.id=L.ouid
INNER JOIN shirts S ON S.id=Ou.shirtid
INNER JOIN pants P ON P.id=Ou.pantid 
INNER JOIN shoes Sh ON Sh.id=Ou.shoeid");



$outfitresults = $mysqli->query("SELECT Ou.id AS id, S.name AS shirtname, S.neck AS shirtneck, S.sleeve AS shirtsleeve, S.color AS shirtcolor, S.size AS shirtsize, P.name AS pantname, P.material AS pantmaterial, P.cut AS pantcut, P.color AS pantcolor, P.size AS pantsize, Sh.name AS shoename, Sh.style AS shoestyle, Sh.uses AS shoeuses, Sh.color AS shoecolor, Sh.size AS shoesize 
FROM outfits Ou 
INNER JOIN shirts S ON S.id=Ou.shirtid
INNER JOIN pants P ON P.id=Ou.pantid 
INNER JOIN shoes Sh ON Sh.id=Ou.shoeid");

$userresults = $mysqli->query("SELECT id,  username FROM outfitusers");


echo '<p> If you want to add an additional outfit that you like, you must select a user and an outfit to add a like </p>';
echo '<div>';
    echo '<form action="add_like.php" method="GET">';
    echo '<table border="1">';
    echo '<tr>';
    echo '<th> Select User </th>';
    echo '<th> Username </th>';
    echo '</tr>';
    while($row = $userresults->fetch_assoc()) {
      echo '<td><input type ="radio"';
      echo 'name = "username" ';
      echo 'value ='.$row["id"]. '></td>'; 
      echo '<td>' .$row["username"]. '</td>';
    }
    echo '</table>';


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
echo '<input type="submit" value= "Add Like">';
echo '</form>';
echo '</div>';

echo '<br>';
echo '<h3> See existing likes by user </h3>';

    echo '<table border="1">';
    echo '<tr>';
    echo '<th> Username </th>';
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


   while($row = $likeresults->fetch_assoc()) {
      echo '<tr>';

      echo '<td>'.$row["username"]. '</td>';
      echo '<td>'.$row["shirtname"].'</td>';
      echo '<td>'.$row ["shirtneck"].'</td>';
      echo '<td>'.$row ["shirtsleeve"].'</td>';
      echo '<td>'.$row ["shirtcolor"].'</td>';
    echo '<td>'.$row["shirtsize"].'</td>';
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



/*
echo '<p> Add Yourself if you arent a user already </p>';

echo '<form action="add_user.php" method="GET">';
echo '<input type="text" name="username"> Username <input>';
echo '<input type="submit" value="Submit">';
echo '</form>';
*/

