<?php
	$column = $_POST["column_option"];
	$order = $_POST["order"];
	if($column!=false&& order!=false)
	{
		$query = "SELECT * FROM bustrip ORDER BY " . $column ." ". $order;
		$result = mysqli_query($connection, $query);
		if(!result)
		{
			die("databases query failed");
		}

		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<li>";
			echo $row['tripname'] . ", " . $row['startdate'] . ", " . $row['enddate'] . ", " . $row['country'] . ", " .  $row['assignedbus']; 
			echo "</li>";
		}
	}
	 
?>
