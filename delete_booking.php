<?php
	//page to select and delete booking
	include 'connectdb.php';
	$query = "SELECT booking.passengerid,booking.tripid,  firstname, lastname, tripname FROM passenger, bustrip, booking WHERE booking.passengerid=passenger.passengerid AND booking.tripid=bustrip.tripid";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		echo mysqli_error($connection);
	}
	echo "<form method='post'>";
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<input type='radio' name='booking' value=".$row['passengerid'].'|'.$row['tripid'].">". $row['firstname']. " ". $row['lastname'] . ', '. $row['tripname']. "<br>\n";
	}
	echo "<input type='submit' name='Submit'>";
	echo "</form>";

	//Getting values
	$result = $_POST['booking'];
	if($result!=false)
	{
		//deletion
		$result_explode=explode('|', $result);
		$query = "DELETE FROM booking WHERE (booking.passengerid=". $result_explode[0]. " AND booking.tripid=". $result_explode[1].")";
		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			echo mysqli_error($connection);
		} 
		else
		{
			echo "Deleted successfully";
			//Refresh function
			header("Refresh:0, url=delete_booking.php");
		} 
	} 
		
	echo "<br>";
	echo '<button onclick="window.location.href=\'main_page.php\'">'. "Go Back" . "</button>";
?>
