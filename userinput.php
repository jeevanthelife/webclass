<?php
//taking user input
if(isset($_POST['submit']))
{
	$input=$_POST['number'];
	if($input%2==0)
	{
		echo "The $input is EVEN";
	}
	else
	{
		echo "THe $input is ODD";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Input | Odd EVEN Number </title>
</head>
<body>
	<form method="POST" action="" name="userInput">
		<fieldset>
		<legend>Find Odd Even</legend>	
		<input type="text" name="number">
		<input type="submit" name="submit" value="result">
		</fieldset>
	</form>

</body>
</html>