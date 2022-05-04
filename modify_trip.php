<?php
	//function: can modify:
	//1. Trip name
	//2. Trip start date
	//3. Trip end date
	//4. Image url

	//Get trip selected
	$selected=$_GET['trip'];

	//modify trip name
	echo "<form id='change_name' method='post'>";
	echo "<label>". "If you want to change trip name: " . "</label>";
	echo "<input type='text' name='tripname'/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
	$new_trip_name = $_POST['tripname'];
	if(!empty($new_trip_name))
	{
		$query = 'UPDATE bustrip SET tripname="'.$new_trip_name.'" WHERE tripid='. $selected;
		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			echo mysqli_error($connection);
		} 
		else
		{
			echo "Update Success!". "<br>";
			echo "All trips are displayed below:" . "<br>";
			include "display_trip.php";
		} 
	}
	
	//modify trip start date
	echo "<form method='post'>";
	echo "<label>" . "If you want to change trip start date: " . "</label>";
	echo "<input type='date' placeholder='yyyy-mm-dd' name='startdate'/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
	$startdate = $_POST['startdate'];
	if(!empty($startdate))
	{
		$query = 'UPDATE bustrip SET startdate="' . $startdate . '" WHERE tripid=' . $selected;
		$result=mysqli_query($connection, $query);
		if(!$result)
		{
			echo mysqli_error($connection);
		} 
		else
		{
			echo "Update Success!" . "<br>";
			echo "All trips are displayed below:" . "<br>";
			include "display_trip.php";

		} 
	} 

	//modify trip end date
	echo "<form method='post'>";
	echo "<label>" . "If you want to change trip end date: " . "</label>";
	echo "<input type='date' placeholder='yyyy-mm-dd' name='enddate'/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
	$enddate=$_POST['enddate'];
	if(!empty($enddate))
	{
		$query = 'UPDATE bustrip SET enddate="' . $enddate . '" WHERE tripid=' . $selected;
		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			echo mysqli_error($connection);
		} 
		else
		{
			echo "Update Suceess!" . "<br>";
			echo "All trips are displayed below:" . "<br>";
			include "display_trip.php";
	
		} 
	} 

	//modify image src
	echo "<form method='post'>";
	echo "<label>" . "If you want to change the image of that trip, please put the image url into this text box: " . "</label>" . "<br>";
	echo "<input type='text' name='image'/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";

	$image=$_POST['image'];
	if (!empty($image))
	{
		if(!empty(getimagesize($image)))
		{
			$query = 'UPDATE bustrip SET urlImage="' . $image . '" WHERE tripid = ' . $selected;
			$result = mysqli_query($connection, $query);
			if(!$result)
			{
				echo mysqli_error($connection);
			} 
			else
			{
				echo "Update Success!" . "<br>";
				echo "All trips are displayed below:" . "<br>";
				include "display_trip.php";

			} 
		}
		else
		{
			echo "This is not an image file. Please try again.". "<br>";
		}
	} 
	 
?>
