<?php
	//a page to create a new booking
	include 'connectdb.php';
	$query_passenger = "SELECT passengerid, firstname, lastname FROM passenger";
	$query_trip = "SELECT tripid, tripname FROM bustrip";
	$result_p = mysqli_query($connection, $query_passenger);
	$result_t = mysqli_query($connection, $query_trip);

	if(!$result_p && !$result_t)
	{
		echo mysqli_query_error();
	}
	echo "<form method='post'>";
	echo "<label>". "Select a passenger: "."</label>";
	echo "<select name='passenger' id='passenger'>";
	echo "<option value=0>". "To be selected" ;
	while($row = mysqli_fetch_assoc($result_p))
	{
		echo '<option value='.$row['passengerid'].'>' . $row['firstname']. ' ' . $row['lastname']. "\n"; 
	}
	echo "</select>";
	echo "<br>";
	echo "<label>". "Select a Trip name: ". "</label>";
	echo "<select name='trip' id='trip'>";
	echo "<option value=0>". "To be selected";
	while($row=mysqli_fetch_assoc($result_t))
	{
		echo '<option value='.$row['tripid'].'>'. $row['tripname']. "\n";
	}
	echo "</select>";
	echo "<br>";

	echo "<label>". "Enter Price:". "</label>"; 
	echo "<input type=text name='price'>". "<br>";
	
	echo "<input type='submit' value='Submit'>";
	echo "</form>";

	$passengerid = $_POST['passenger'];
	$tripid = $_POST['trip'];
	$price = $_POST['price'];
	if($passengerid!=0 && $tripid!=0 && !empty($price))
	{
		$query = "INSERT INTO booking VALUES (".$passengerid. ", " . $tripid. ", ". $price.")";
		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			if(mysqli_errno($connection)==1062)
			{
				echo "Booking exists";
			} 
			else
			{
				echo mysqli_error($connection);
			} 
		} 
		else
		{
			echo "Booking added successfully";
		} 
	}
	echo "<br>";
	echo '<button onclick="window.location.href=\'main_page.php\'">';	 echo "Go Back";
	echo "</button>";
	 
?>
