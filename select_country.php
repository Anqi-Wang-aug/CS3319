<?php
	//specific page to select country names and see trips in those countries
	include 'connectdb.php';
	$countries = "SELECT DISTINCT country FROM bustrip ";
	$country_result = mysqli_query($connection, $countries);

	if(!$country_result)
	{
		die("databases query failed");
	} 
	
	echo '<form action="" method="post">';
	echo "\n";

	while ($row=mysqli_fetch_assoc($country_result))
	{
		echo '<input type="radio" name="country" value= "'. $row['country'].'">' . $row['country'];
	}
	echo '<input type="submit" name="submit" value="Get Selected Value">';
	echo '</form>';

	$select = $_POST["country"];
	if($select!=false)
	{
		$query = 'SELECT * FROM bustrip WHERE country = "'. $select.'"';
		$select_result = mysqli_query($connection, $query);
		
		echo '<ul>';
		while ($row=mysqli_fetch_assoc($select_result))
		{
			echo '<li>' . $row['tripid'] .', '. $row['tripname'] .', '. $row['startdate'] . ', '. $row['enddate']. ', '. $row['country'] .', '. $row['assignedbus'] . '</li>';
			echo "\n";
		} 
	} 
	echo '<ul>';

	echo "\n";
	echo '<button onclick="window.location.href=\'main_page.php\'">';
	echo 'Go back';
	echo '</button>';

?>
