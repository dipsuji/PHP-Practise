<?php
//PHP 5 Arrays---
//An array is a special variable, which can hold more than one value at a time.

//*PHP Indexed Arrays--
	$language = array("Java", "PHP", "Python"); 
echo "I like " . $language[0] . ", " . $language[1] . " and " . $language[2] . "<br>";

//Get The Length of an Array by The count() Function--
	$language = array("Java", "PHP", "Python"); 
echo "length of the array : ".count($language)."<br>";

//Loop Through an Indexed Array
//To loop through and print all the values of an indexed array, you could use a for loop, like this:

$language= array("Java", "PHP", "Python");
$arrlength = count($language);

for($x = 0; $x < $arrlength; $x++) {
    echo $language[$x];
    echo "<br>";
}

//PHP Associative Arrays--
//Associative arrays are arrays that use named keys that you assign to them.
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

//Loop Through an Associative Array--
$age = array("Dinkar"=>"27", "Sujata"=>"25", "Alex"=>"43",  "Yamini"=>"40");

foreach($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}

?>
<!--output

I like Java, PHP and Python
length of the array : 3
Java
PHP
Python
Peter is 35 years old.
Key = Dinkar, Value = 27
Key = Sujata, Value = 25
Key = Alex, Value = 43
Key = Yamini, Value = 40
-->