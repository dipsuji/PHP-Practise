<?php
$x=  strlen("Hello world!");
echo "strlen define the length ".$x."<br>";
$x=  str_word_count("Hello world!");
echo "str_word_count, this count the words".$x."<br>";

$x=  strrev("Hello world!");
echo "reverse string : ".$x."<br>";

$x=  strpos("Hello world!", "world");
echo "get a position of specific word : ".$x."<br>";

$x = str_replace("world", "Dolly", "Hello world!");
echo "replace word : ".$x."<br>";

// case-sensitive constant name
define("GREETING", "Welcome to My website!");
echo "case sensitive constant name : ".GREETING."<br>";

define("CONSTANT", "Constants are automatically global and can be used across the entire script.");

function myTest() {
    echo CONSTANT;
}

echo "".myTest()."<br>";

$x = "100";
$y = "100";
$eqult = ($x == $y);
echo " because values are equal".$eqult."<br>"; // returns true because values are equal

$x = 50;
$y = 50;

echo " because  $x is less than or equal to $y".var_dump($x <= $y)."<br>"; // returns true because $x is less than or equal to $y

$x = 10;
echo "Increments $x by one, then returns $x ; ".++$x."<br>";

$x = 10;
echo "Returns $x, then increments $x by one ; ".$x++."<br>";
echo "Returns $x, now  increments $x by one ; ".$x."<br>";

$txt1 = "Hello";
$txt2 = " world!";
echo "String operation,Concatenation of $txt1 and $txt2 : " .$txt1 . $txt2."<br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo  "String operation,Appends $txt2 to $txt1 : " .$txt1."<br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); // union of $x and $y

$dt = date("H-M");
echo "date is : ".$dt. "<br>";

$t = date("H");
echo "H : ".$t. "<br>";
if ($t < "20") {
    echo "Have a good day!";
}

$t = time("H");
echo "<p>The hour (of the server) is " ;
echo ", and will give the following message:</p>";
if ($t < "20") {
    echo "this is a.m";
} else {
    echo "this is p.m";
}

$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}



?>
