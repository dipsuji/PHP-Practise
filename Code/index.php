<?php


$txt = "My first php .... Hello world!"."<br>";
print "I'm about to learn PHP!..................";
# PHP Case Sensitivity---In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

# However; all variable names are case-sensitive.
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

// a variable starts with the $ sign, followed by the name of the variable:

	$x = 25;
	$y = 10.5;
	echo "Sum of two number: " . $x+$y . "<br>";

	$z = 5; // global scope
function myTest() {
	$x = 10; // local variable
    // using x inside this function will generate an error
    echo "$$$$$$$$$$$$$$$$$$$$:".$GLOBALS['z']."<br>";
	 echo "Variable x inside function is:".$x."<br>";


}
myTest();
echo "<p>Variable z outside function is: $z</p>";

#The global keyword is used to access a global variable from within a function.

$x = 55;
$y = 10;
$Z=30;
$s=45;
function mySecondTest() {
    global $x, $y;
    $y = $x + $y;
	 $GLOBALS['s'] = $GLOBALS['z'] + $GLOBALS['s'];
}

mySecondTest();  // run function
echo "Sum of two number: " .$y . "<br>"; // output the new value for variable $y
echo "Sum of two number: " . $s. "<br>";

function myThirdTest() {
    static $r = 5;
    echo $r;
    $r++;
}

myThirdTest();
	echo "<br>";
myThirdTest();
	echo "<br>";
myThirdTest();
	echo "<br>";

$x = 5985;
echo  "".var_dump($x). "<br>";
//var_dump($x);

$x = 10.365;
echo "" .var_dump($x). "<br>";
//var_dump($x);

$cars = array("Volvo","BMW","Toyota");
echo "array" . var_dump($cars). "<br>";


class Car {
    function Car() {
        $this->model = "VW";
		 $this->model1 = "VW333333";
		 $this->model2 = "VW33";
		 $this->model3 = "VW333";


    }
}
// create an object
$Object = new Car();

// show object properties
echo "model: ". $Object->model;
echo "model3: ". $Object->model3;

?>
