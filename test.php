<form action="" method="post">
	<input type="radio" name="radio" value="1"> Radio1
	<input type="submit" name="submit" /> 
</form>
<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['radio']))
		{
			echo $_POST['radio'];
		} 
	} 
	 
?>
