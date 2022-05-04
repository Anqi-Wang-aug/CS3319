<!DOCTYPE html>
<html>
	<h2>Records are displayed as: trip name, start date, end date, destination country, bus assgined to this trip</h2>
	Display Option: 
	<form action="" method="post">
		<input type="radio" name = "column_option" value = "tripname">By Trip
		<input type = "radio" name = "column_option" value= "country"> By Country 

	<br>
	Order By:
		<input type="radio" id="asc" name = "order" value = "ASC"> Ascending 
		<input type = "radio" id = "desc" name = order value = "DESC"> Descending 
		<input type="submit" name="submit" value="Get Selecetd Value">
	</form>
	<br>
	<?php
		include 'connectdb.php';
		include 'getTrip.php';
		 
	?>	
	<br>
	<button onclick="window.location.href='main_page.php';">
		Go back
	</button>
</html>
