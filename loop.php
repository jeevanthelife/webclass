<?php
//For Loop
$num=10;
for($i=1;$i<=10; $i++)
{
	echo "$num x $i = ". $num*$i. "<br/>";
}
?>

<?php
//printing with table
$num=4;
echo "<table border=1 cellpadding=4 cellspacing=4 width=300px>";
$i=1;
while($i<=10)
{
	$result=$num*$i;
	echo "<tr><td>$num x $i =  $result";
	$i++;
}
echo "</table>";
?>



