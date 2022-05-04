<?php
	//function to delete a trip. Will display all trips in the database if deletion is sucessful
	$selected = $_GET['trip'];
	if(!empty($selected))
	{
		echo "<label>" . "Do you want to delete this trip?" . "</label>" . "<br>";
		echo "<form method='post'>";
		echo "<input type='radio' name ='answer' value=0>". "No";
		echo "<input type='radio' name = 'answer' value=1>". "Yes";
		echo "<input type='submit' value='Submit'>";
		echo "</form>";

		$answer = $_POST['answer'];
		if($answer==1)
		{
			$query = "DELETE FROM bustrip WHERE tripid=" . $selected;
			$result = mysqli_query($connection, $query);
			if(!$result)
			{
				if(mysqli_errno($connection)==1451)
				{
					echo "This trip is booked by someone else!";
				} 
				else
				{
					echo mysqli_errno($connection);
				} 
			} 
			else
			{
				echo "Deletion Sucess!";
				include 'display_trip.php';
			} 
		} 

	} 
?>
