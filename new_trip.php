<!DOCTYPE html>
<html>
	<head>
		<style>
			font{
				color:red;
			} 
		</style>
	</head>
	<body>
	<!--page to add new trip!-->
	<!--must fill into all information! to add a trip-->
	<h2> Add Your Own Trip!</h2>
	<font> Required Field: *</font>
	<br>
	<form method="post">
		<label> Trip Name <font>*</font>: </label>
		<input type="text" name="tripname"><br>
		<label> Start Date <font>*</font>: </label>
		<input type="date"  name = "startdate" placeholder="yyyy-mm-dd" value=""/> <br>
		<label> End Date <font>*</font>: </label>
		<input type="date" placeholder="yyyy-mm-dd" name="enddate"/><br>
		<label> Destination Country<font>*</font>: </label>
		<input type="text" name ="country"/><br>
		<label> Assigned bus<font>*</font>: </label>
		<select name="pickabus" id="pickabus">
			<option value="empty"> (No bus assigned) </option>
			<?php
				include 'connectdb.php';
				include 'option_bus.php';
			?>
		</select>
		<label> Image URL: </label>
		<input type="text" name = "image"/>
		<br>
		<input type="submit" value="Submit">
	</form>
	<?php
		include 'connectdb.php';
		$tripname = $_POST["tripname"];
		$startdate = $_POST["startdate"];
		$enddate = $_POST["enddate"];
		$country = $_POST["country"];
		$bus = $_POST["pickabus"];
		$image = $_POST["image"];
		if(!empty($tripname) && !empty($startdate) && !empty($enddate) && !empty($country) && $bus!="empty")
		{
			if($startdate>$enddate)
			{
				echo "Start date must be greater than end date!";
				echo "<br>";
			}
			else if(empty(getimagesize($image)))
			{
				//check if url is an image file
				echo "This is not an image! Please try again.". "<br>";
			} 
			else
			{
				//adding new records
				$query_max = "SELECT MAX(tripid) AS max FROM bustrip";
				$max_id = mysqli_query($connection, $query_max);
				if(!$max_id)
				{
					die("database query failed");
				} 
				else
				{
					$max = mysqli_fetch_assoc($max_id);
					$new_trip_id = $max['max']+1;
					if(empty($image))
					{
						$insert = "INSERT INTO bustrip VALUES(" . $new_trip_id .",'" . $tripname . "','" .  $startdate . "','" . $enddate . "','" . $country . "','" .  $bus . "', NULL)";

					}
					else
					{
						$insert = "INSERT INTO bustrip VALUES(" . $new_trip_id .",'" . $tripname . "','" .  $startdate . "','" . $enddate . "','" . $country . "','" .  $bus . "','" . $image. "')";

					} 
					$insert_result = mysqli_query($connection, $insert);
					if(!$insert_result)
					{
						echo mysqli_error($connection);
					}
					else
					{
						echo "Now the new trip is added, please take a look here: ";
						include 'display_trip.php';
					} 
				} 
			} 
		}
		else
		{
			echo "Something is not selected";
			echo "<br>";
		} 
	?>
	<br>
	<button onclick="window.location.href='main_page.php';">
		Go back
	</button>
	</body>
</html>
