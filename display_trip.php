<?php
	//to display all trip data after modification or deletion of those records
	$query = "SELECT * FROM bustrip";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		echo mysqli_error($connection);
	} 
	else
	{
		echo "<ul>\n";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<li>";
			echo $row['tripid'] . ", " . $row['tripname'] . ", " . $row['startdate'] . ", " . $row['enddate'] . ", " . $row['country'] . ", " . $row['assignedbus'];
			echo '<img src="' . $row['urlImage'] . '" height = "60" width="60">';
		}
		echo "</ul>";
	} 
?>
