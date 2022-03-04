<?php
/*
 * DEBUG 1 = show errors when they occur
 * DEBUG 0 = disable error reporting
 */
define('DEBUG', 1);
if (DEBUG) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Application</title>
</head>
<body>
<?php
// Display greeting message
echo 'Hello World!';
?>

<h2>Standard PHP Syntax</h2>
<?php
// Some code to be executed
echo "Hello, world!";
?>
<h2>Embedding PHP within HTML</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple PHP File</title>
</head>
<body>
    <h1><?php echo "Hello, world!"; ?></h1>
</body>
</html>

<h2>PHP Comments</h2>
<?php
// This is a single line comment
# This is also a single line comment
echo "Hello, world!";
?>

<?php
/*
This is a multiple line comment block
that spans across more than
one line
*/
echo "Hello, world!";
?>

<h2>Case Sensitivity</h2>
<?php
// Assign value to variable
$color = "blue";
$Color = "green";
$COLOR = "pink";

 
// Try to print variable value
echo "The color of the sky is " . $color . "<br>";
echo "The color of the sky is " . $Color . "<br>";
echo "The color of the sky is " . $COLOR . "<br>";
?>
</body>
</html>

<?php
// Assign value to variable
$color = "blue";
 
// Get the type of a variable
echo gettype($color) . "<br>";
echo GETTYPE($color) . "<br>";
?>

<h2>Variables</h2>

<?php
// Declaring variables
$txt = "Hello World!";
$number = 10;
 
// Displaying variables value
echo $txt;  // Output: Hello World!
echo $number; // Output: 10
?>

<?php // Variables must start ith $ sign followed by the name, if it is followed by a number it will break ERROR internal 500 not found 404 no problem 200
?>

<h2>Constant in PHP</h2>
<?php
// Defining constant
define("SITE_URL", "https://www.tutorialrepublic.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
?>

<h2>Display Strings of Text</h2>

<?php
// Displaying string of text
echo "Hello World!";
?>

<h2>Display HTML Code</h2>

<?php
// Displaying HTML code
echo "<h4>This is a simple heading.</h4>";
echo "<h4 style='color: red;'>This is heading with style.</h4>";
?>

<h2>Display Variables using echo statement</h2>

<?php
// Defining variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");
 
// Displaying variables
echo $txt;
echo "<br>";
echo $num;
echo "<br>";
echo $colors[0];
?>

<h2>PHP intergers</h2>

<?php
$a = 123; // decimal number
var_dump($a);
echo "<br>";
 
$b = -123; // a negative number
var_dump($b);
echo "<br>";
 
$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";
 
$d = 0123; // octal number
var_dump($d);
?>

<h2>PHP strings</h2>

<?php
$a = 'Hello world!';
echo $a;
echo "<br>";
 
$b = "Hello world!";
echo $b;
echo "<br>";
 
$c = 'Stay here, I\'ll be back.';
echo $c;
?>

<h2>PHP Floating Point Numbers or Doubles</h2>

<?php
$a = 1.234;
var_dump($a);
echo "<br>";
 
$b = 10.2e3;
var_dump($b);
echo "<br>";
 
$c = 4E-10;
var_dump($c);
?>

<h2>PHP Booleans</h2>

<?php
// Assign the value TRUE to a variable
$show_error = true;
var_dump($show_error);
?>

<h2>PHP Arrays</h2>

<?php
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);
?>

<h2>PHP objects</h2>

<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
?>

<h2>PHP NULL</h2>

<?php
$a = NULL;
var_dump($a);
echo "<br>";
 
$b = "Hello World!";
$b = NULL;
var_dump($b);
?>

<h2>PHP Resources (example on code)</h2>

<?php
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";
 
// Connect to MySQL database server with default setting
$link = mysqli_connect("localhost", "root", "");
var_dump($link);
?>

<h1>Strings in PHP</h1>

<h2>String Example</h2>

<?php
$my_str = 'World';
echo "Hello, $my_str!<br>";      // Displays: Hello World!
echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!
 
echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
echo 'I\'ll be back';            // Displays: I'll be back
?>

<h2>Calculating the Length of a String</h2>

<?php
$my_str = 'Welcome to Tutorial Republic';
 
// Outputs: 28
echo strlen($my_str);
?>

<h2>Counting Number of Words in a String</h2>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
 
// Outputs: 9
echo str_word_count($my_str);
?>

<h2>Replacing Text within Strings</h2>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);
?>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
echo "The text was replaced $count times.";
?>

<h2>Reversing a String</h2>

<?php
$my_str = 'You can do anything, but not everything.';
 
// Display reversed string
echo strrev($my_str);
?>
<h1>MATH</h1>

<h2>PHP Arithmetic Operators</h2>

<?php
$x = 10;
$y = 4;
echo($x + $y); // 0utputs: 14
echo "<br>\n";
echo($x - $y); // 0utputs: 6
echo "<br>\n";
echo($x * $y); // 0utputs: 40
echo "<br>\n";
echo($x / $y); // 0utputs: 2.5
echo "<br>\n";
echo($x % $y); // 0utputs: 2
?>

<h2>PHP Assignment Operators</h2>

<?php
$x = 10;
echo $x; // Outputs: 10
 
$x = 20;
$x += 30;
echo $x; // Outputs: 50
 
$x = 50;
$x -= 20;
echo $x; // Outputs: 30
 
$x = 5;
$x *= 25;
echo $x; // Outputs: 125
 
$x = 50;
$x /= 10;
echo $x; // Outputs: 5
 
$x = 100;
$x %= 15;
echo $x; // Outputs: 10
?>

<h2>PHP Comparison Operators</h2>

<?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y);  // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x < $y);   // Outputs: boolean true
var_dump($x > $y);   // Outputs: boolean false
var_dump($x <= $y);  // Outputs: boolean true
var_dump($x >= $y);  // Outputs: boolean false
?>

<h2>PHP Incrementing and Decrementing Operators</h2>

<?php
$x = 10;
echo ++$x; // Outputs: 11
echo $x;   // Outputs: 11
 
$x = 10;
echo $x++; // Outputs: 10
echo $x;   // Outputs: 11
 
$x = 10;
echo --$x; // Outputs: 9
echo $x;   // Outputs: 9
 
$x = 10;
echo $x--; // Outputs: 10
echo $x;   // Outputs: 9
?>

<h2>PHP Logical Operators</h2>

<?php
$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
?>

<h2>PHP String Operators</h2>

<?php
$x = "Hello";
$y = " World!";
echo $x . $y; // Outputs: Hello World!
 
$x .= $y;
echo $x; // Outputs: Hello World!
?>

<h2>PHP Array Operators</h2>

<?php
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y; // Union of $x and $y
var_dump($z);
var_dump($x == $y);   // Outputs: boolean false
var_dump($x === $y);  // Outputs: boolean false
var_dump($x != $y);   // Outputs: boolean true
var_dump($x <> $y);   // Outputs: boolean true
var_dump($x !== $y);  // Outputs: boolean true
?>

<h2>PHP Spaceship Operator</h2>

<?php
// Comparing Integers 
echo 1 <=> 1; // Outputs: 0
echo 1 <=> 2; // Outputs: -1
echo 2 <=> 1; // Outputs: 1
 
// Comparing Floats
echo 1.5 <=> 1.5; // Outputs: 0
echo 1.5 <=> 2.5; // Outputs: -1
echo 2.5 <=> 1.5; // Outputs: 1
 
// Comparing Strings
echo "x" <=> "x"; // Outputs: 0
echo "x" <=> "y"; // Outputs: -1
echo "y" <=> "x"; // Outputs: 1
?>

<h2>PHP Conditional Statements</h2>

<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
}
?>

<h2>The If...else Statement</h2>

<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} else{
    echo "Have a nice day!";
}
?>

<h2>The if...elseif...else Statement</h2>

<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
}
?>

<h2>The Ternary Operator</h2>

<?php

$age = ('12');

if($age < 18){
    echo 'Child'; // Display Child if age is less than 18
} else{
    echo 'Adult'; // Display Adult if age is greater than or equal to 18
}
?>

<h2>The Null Coalescing Operator</h2>

<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
?>

<?php
$name = $_GET['name'] ?? 'anonymous';
?>

<h1>PHP Switch...Case Statements</h1>

<h2>PHP If…Else Vs Switch…Case</h2>

<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>

<h2>What is PHP Arrays?</h2>

<?php
$color1 = "Red";
$color2 = "Green";
$color3 = "Blue";
?>

<h2>Indexed Arrays</h2>

<?php
// Define an indexed array
$colors = array("Red", "Green", "Blue");
?>

<?php
$colors[0] = "Red"; 
$colors[1] = "Green"; 
$colors[2] = "Blue"; 
?>

<h2>Associative Arrays</h2>

<?php
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
?>

<?php
$ages["Peter"] = "22";
$ages["Clark"] = "32";
$ages["John"] = "28";
?>

<h2>Multidimensional Arrays</h2>

<?php
// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
?>

<h2>Viewing Array Structure and Values</h2>

<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
print_r($cities);
?>

<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
var_dump($cities);
?>