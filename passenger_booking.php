<!DOCTYPE html>
<html>
	<body>
		<h2> Select passengers and see their bookings!</h2>
		<form method="post">
			<?php
				//make an radio (option) list of passengers
				include 'connectdb.php';
				$query = "SELECT passengerid, firstname, lastname FROM passenger";
				$result = mysqli_query($connection, $query);
				if(!$result)
				{
					echo mysqli_query_error();
				} 
				else
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo '<input type="radio" name="passenger" value='.$row['passengerid'].'>';
						echo $row['firstname']. ' '. $row['lastname'];
						echo '<br>';
						echo "\n";
					}
					echo '<input type="submit" value="Submit">';
				} 
			?>
		</form>
		<?php
			//display all bookings for selected passengers

			include 'connectdb.php';
			$passengerid = $_POST['passenger'];
			
			if($passengerid!=false) 
			{
				$query = "SELECT tripname, startdate, enddate, country, assignedbus FROM bustrip,booking WHERE bustrip.tripid=booking.tripid AND booking.passengerid=". $passengerid;
				$result = mysqli_query($connection, $query);
				if(!$result)
				{
					echo mysqli_error($connection);
				}
				else
				{
					echo "<ul>\n";
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<li>";
						echo $row['tripname'] . ", " . $row['startdate'] . ", " . $row['enddate'] . ", " . $row['country'] . ", " . $row['assignedbus'];
						echo "</li>\n";
					} 
					echo "</ul>\n";
				}
			} 
		?>
		<button onclick = "window.location.href='main_page.php'"> Go Back </button>
	</body>
</html>
