<?php
	//get all trips by the order selected by the user
	$column = $_POST["column_option"];
	$order = $_POST["order"];
	if($column!=false && $order!=false)
	{
		$query = "SELECT * FROM bustrip ORDER BY " . $column ." ". $order;
		$result = mysqli_query($connection, $query);
		if(!result)
		{
			die("databases query failed");
		}

		echo '<form id="list_trip" action="" method="get">';
		echo "\n";
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "\t\t";
			echo '<input type="radio" name="trip" value=' . $row['tripid'] . '>';
			echo $row['tripid'] . ", " . $row['tripname'] . ", " . $row['startdate'] . ", " . $row['enddate'] . ", " . $row['country'] . ", " .  $row['assignedbus']; 
			echo '<img src="' . $row['urlImage'] . '" height="60" width="60">';
			echo "<br>";
			echo "\n";
		}
		echo "\t";
		echo '<input type="submit" value="Submit">';
		echo "</form>";
		
	}
	else
	{
		echo "You must select a value\n";
	} 
	 
?>
