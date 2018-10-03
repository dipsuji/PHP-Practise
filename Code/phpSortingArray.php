<?php
//PHP Sorting Arrays---
//Sort Array in Ascending Order - sort()
$language= array( "Python", "Java", "PHP");
sort($language);

$lanlength = count($language);
for($x = 0; $x < $lanlength; $x++) {
    echo $language[$x];
    echo "<br>";
}

// sorts the elements of the $numbers array in ascending numerical order:
$numbers = array(3, 4, 16, 22, 11, 20);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

//Sort Array in Decending Order - rsort()
$language= array("Java", "PHP", "C++");
sort($language);

$lanlength = count($language);
for($x = 0; $x < $lanlength; $x++) {
    echo $language[$x];
    echo "<br>";
}
//Sort Array (Ascending Order), According to Value - asort()
//*Sort Array (Ascending Order), According to Key - ksort()
$age = array("Dinkar"=>"27", "Sujata"=>"25", "Alex"=>"43",  "Yamini"=>"40");
asort($age);
//*ksort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//Sort Array (Descending Order), According to Value - arsort()
//*Sort Array (Descending Order), According to Value - arsort()

$age = array("Sonu"=>"18", "Babali"=>"20", "Ruchi"=>"19",  "Alok"=>"21");
arsort($age);
//*ksort($age);

foreach($age as $x => $x_value) {
    echo "key=" . $x . ", value=" . $x_value;
    echo "<br>";
}

?>
<!--output 
Java
PHP
Python
3
4
11
16
20
22
PHP
Java
C++
Key=Sujata, Value=25
Key=Dinkar, Value=27
Key=Yamini, Value=40
Key=Alex, Value=43
key=Alok, value=21
key=Babali, value=20
key=Ruchi, value=19
key=Sonu, value=18
-->
