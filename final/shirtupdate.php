<?php
include 'connection.php';
  $out_name = $_GET["shirt"];

echo '<h1> Update the Shirt </h1>';
echo '<h2> The old values are by the colon, Enter in new values </h2>';
echo '<h3> You must enter in a value for each input box </h3>';
echo '<br>';
$shirtresults = $mysqli->query("SELECT * FROM shirts WHERE id='$out_name'");
	echo '<form action="shirtupdate1.php">';
      
  while($shirtrow = $shirtresults->fetch_assoc()) {
	echo '<input type="hidden" name="id" value='.$out_name;
	echo '>';
	echo 'Name: ';
        echo $shirtrow["name"];
	echo '<input type ="text" name="name">';  
        echo '<br>';
	echo 'Neck: ';
	echo $shirtrow["neck"];
	echo '<input type="text" name="neck">';
        echo '<br>';
	echo 'Sleeve: ';
	echo $shirtrow["sleeve"];
        echo '<input type="text" name="sleeve">';	        
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

/*
     echo '<option value = name';
	echo '>'; 
       echo $shirtrow["name"];
	echo '</option>';
        echo '<option value = neck';
        echo '>'; 
       echo $shirtrow["neck"];
        echo '</option>';
        echo '<option value = sleeve';
        echo '>';
       echo $shirtrow["sleeve"];
        echo '</option>';
        echo '<option value = color';
        echo '>';
       echo $shirtrow["color"];
        echo '</option>';
        echo '<option value = size';
        echo '>';
       echo $shirtrow["size"];
        echo '</option>';	

}
	echo '</select>';
	echo '<input type ="text" name="updated">';
	echo '<input type="submit" value="submit">';
	echo '</form>';
/*
      echo $shirtrow["neck"];
      echo $shirtrow["sleeve"];
      echo $shirtrow["color"];
      echo $shirtrow["size"];
	}



/*
	echo '<select>';
	echo '<option value = '.$out_name '>';
	echo $out_name;
	echo '</option>';
        echo '<option value = '.$out_neck '>';
        echo $out_neck;
        echo '</option>';
        echo '<option value = '.$out_sleeve '>';
        echo $out_sleeve;
        echo '</option>';
        echo '<option value = '.$out_color '>';
        echo $out_color;
        echo '</option>';
        echo '<option value = '.$out_size '>';
        echo $out_size;
        echo '</option>';

/*


ini_set('display_errors', 'On');
include 'connection.php';

  $out_oshirt = $_GET["shirt"];


if (!($stmt = $mysqli->query("DELETE FROM shirts WHERE id = '$out_oshirt' LIMIT 1 ")))
        echo "You need to delete the outfit first";
*/
?>
