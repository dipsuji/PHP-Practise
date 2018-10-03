<?php
// A function name can start with a letter or underscore (not a number).

//Give the function a name that reflects what the function does.
function WrightText() {
    echo "Hello world!"."<br>";
}
WrightText();
//PHP Function Arguments---
//Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

function FriendsName($fname) {
    echo "$fname Cathenna .<br>";
}

FriendsName("Jhon");
FriendsName("Alex");
FriendsName("Yamini");
FriendsName("sujata");
FriendsName("Dinkar");

//PHP Default Argument Value--
//The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

function setWeight($minweight = 50) {
    echo "The height is : $minweight <br>";
}

setWeight(35);
setWeight();
setWeight(90);
setWeight(80);

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "15 + 23 = " . sum(15,23) . "<br>";
echo "34 + 33 = " . sum(34,33) . "<br>";
echo "21 + 34 = " . sum(21,34)."<br>";
?>

<!-- Output
Hello world!
Jhon Cathenna .
Alex Cathenna .
Yamini Cathenna .
sujata Cathenna .
Dinkar Cathenna .
The height is : 35 
The height is : 50 
The height is : 90 
The height is : 80 
15 + 23 = 38
34 + 33 = 67
21 + 34 = 55
-->
