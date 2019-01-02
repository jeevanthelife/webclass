<?php
if(isset($_POST['submit']))
{
$n1=$_POST['num1'];
$n2=$_POST['num2'];
if(empty($n1) && empty($n2))
	{
		echo "<div class='error'>";
		echo "Erro! Plese Write First and Second Number <br/>";
		echo "</div>";
	
	}
	elseif(empty($n1))
	{
		echo "<div class='error'>";
		echo "Error! Please Write First Number <br/>";
		echo "</div>";
	}
	elseif(empty($n2))
	{
		echo "<div class='error'>";
		echo "Error! Please Write Second Number <br/>";
		echo "</div>";
	}
	else
	{	
		echo "<h1>Output</h1>";
	echo "<h3>The Sum of $n1 and $n2 is ".($n1+$n2). ".</h3>";
	echo "<h3>The Subtract of $n1 and $n2 is ".($n1-$n2). ".</h3>";
	echo "<h3>The Product of $n1 and $n2 is ".$n1*$n2. ".</h3>";
	echo "<h3>The Division of $n1 by $n2 is ".$n1/$n2. ".</h3>";
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Airthmatic Operations</title>
	<style>
	.error{
		color:#ff0000;
		font-weight: bolder;
	}
</style>
</head>
<body>
	<form method="POST" name="oddEven" action="">
		<fieldset>
			<legend>Odd Even Check</legend>
			First Number <input type="number" name="num1" value=<?php if(isset($n1)) echo  $n1; ?>><br/>
			Second Number <input type="number" name="num2" value=<?php if(isset($n2)) echo  $n2; ?>>
			<input type="submit" name="submit" value="Result"><br/>
		</fieldset>
	</form>
</body>
</html>
