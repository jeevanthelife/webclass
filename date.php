<?php
//using date functions

//setting the time zonme
date_default_timezone_set('Asia/Kathmandu');
$today=date('Y/m/d, h:i:s a');

echo $today;

echo "<br/>";
echo "Australia Time is ";
date_default_timezone_set('Australia/Sydney');
echo date('Y/m/d, h:i:s a');

?>