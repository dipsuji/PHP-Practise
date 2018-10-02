<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!<br>";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//The PHP while Loop
//The while loop executes a block of code as long as the specified //condition is true.
$x = 1;
 while($x <= 3) {
  echo "The number is: $x <br>";
  $x++;
} 

echo "<h4>The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.</h4><br>";
$x = 10;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 14);

echo "<h4>The for loop is used when you know in advance how many times the script should run.</h4><br>";
for ($x = 0; $x <= 3; $x++) {
    echo "The number is: $x <br>";
} 

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $each_item) {
  echo "$each_item <br>";
}



?>
