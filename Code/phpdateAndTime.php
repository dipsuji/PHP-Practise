<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
	
//Here are some characters that are commonly used for times:
echo "The time is " . date("h:i:sa") ."<br>";
	
//If the time you got back from the code is not the right time, it's probably because your server is in another country or set up for a different timezone.
//So, if you need the time to be correct according to a specific location, you can set a timezone to use.
	
	date_default_timezone_set("Japan");
echo "The time is " . date("h:i:sa") . "<br>";
	
//Create a Date With PHP mktime()---
	//mktime(hour,minute,second,month,day,year)
	$d=mktime(10, 24, 54, 10, 16, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
	
	//Create a Date From a String With PHP strtotime(), strtotime(time,now)
	$d=strtotime("10:30pm September 06 1993");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
	
//PHP converting a string to a date, so you can put in various values:	
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
	
	//However, strtotime() is not perfect, so remember to check the strings you put in there.
	
	$startdate=strtotime("Monday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
	
	$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.<br>";

	
?>
	
<!--	Use the date() function to automatically update the copyright year on your website:-->
	&copy; 2010-<?php echo date("Y");?>

</body>
</html>