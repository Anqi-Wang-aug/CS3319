<?php
	//make option list of bus in create-new-trip page
	$query = "SELECT licenseplate FROM bus";
	$result=mysqli_query($connection, $query);
	if(!$result)
	{
		die("databases query failed");
	}
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<option value='. $row['licenseplate'].'>';
		echo $row['licenseplate'];
		echo '</option>';
	} 

?>
