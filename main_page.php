<!DOCTYPE html>
<html>
	<head>
		<title> Trip Info Site </title>	
	</head>
	<body>
		<h1> Trip Information</h1>
		<?php
			include "connectdb.php";
		?>
		<nav>
			<div id="menu">
				<ul>
					<li><a href="all_trips.php"> All Trips </a></li>
					<li><a href="#"> Add Your Trip</a></li>
					<li><a href="#"> See Bookings From One Country </a></li>
					<li><a href='#'> Create Your Booking </a> </li>
					<li><a href='#'> Passenger Info </a></li>
					<li><a href='#'> Cancel Booking </a></li>
					<li><a href='#'> See Unbooked Trips </a></li>
				</ul>
			</div>
		</nav>
	</body>
</html>
