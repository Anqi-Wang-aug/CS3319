<!DOCTYPE html>
<html>
	<h2> List of passengers</h2>
	<?php
		//php code to get and display passenger info
		include 'connectdb.php';
		$query = 'SELECT * FROM passenger, passport WHERE passenger.passengerid=passport.passengerid ORDER BY lastname'; 
		$result = mysqli_query($connection, $query);
		$num = 0;
		if(!result)
		{
			die("database query failed");
			echo "error";
		}
		while ($row = mysqli_fetch_assoc($result))
		{
			if($num!=0)
			{
				echo "\t";
			}
			else
			{
				$num = 1;
			} 
			echo "<li>";
			echo $row['firstname'] . " " . $row['lastname'] . ", " . $row['passportnum'] . ", " . $row['citizenshipcountry'] . ", " . $row['expireydate'] . ", " . $row['birthdate'];
			echo "</li>";
			echo "\n";
		} 
	?>

<button onclick="window.location.href='main_page.php'"> Go Back </button>
</html>
