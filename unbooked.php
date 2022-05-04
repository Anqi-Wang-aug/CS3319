<?php
	//Display a list of unbooked trip
	include 'connectdb.php';
	echo "<h2>". "List of Unbooked Trips" . "</h2>\n";
	$query = "SELECT tripname, startdate, enddate, country, assignedbus FROM bustrip WHERE tripid NOT IN (SELECT tripid FROM booking)";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		echo mysqli_query_error();
	}
	echo "<ul>\n";
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<li>";
		echo $row['tripname'] .", ". $row['startdate'] .", ". $row['enddate'] .", ". $row['country'] .", ". $row['assignedbus'];
		echo "</li>\n";
	} 
	echo "</ul>\n";
	echo '<button onclick="window.location.href=\'main_page.php\'">';
	echo "Go back";
	echo '</button>';
?>
