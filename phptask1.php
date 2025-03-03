<!DOCTYPE html>
<html>
<head>
<title>PHP Variables and Data Manipulation</title>
<style>
body {
    font-family: sans-serif;
    margin: 20px;
    background-color: #A6F1E0;
}

h2 {
    color: #333;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
    margin-top: 20px;
}

p {
    margin-bottom: 10px;
    line-height: 1.6;
}

.data-type-info {
    background-color: #e8f5e9;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 15px;
    border: 1px solid #c8e6c9;
}

.data-type-info strong {
    color: #2e7d32;
}
</style>
</head>
<body>

<?php
// 1. Personal Information

$name = "Attiya ";
$gender = "FEMALE";
$age = 30; 
$address = "JHANG";
$degree = "BSCS";
$dob = "4 April 2001"; 

echo "<h2>Personal Information</h2>";
echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Gender:</strong> " . $gender . "</p>";
echo "<p><strong>Age:</strong> " . $age . "</p>";
echo "<p><strong>Address:</strong> " . $address . "</p>";
echo "<p><strong>Degree:</strong> " . $degree . "</p>";
echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";

// 2. Variable Juggling (Swapping)

$a = 10;
$b = 20;

echo "<h2>Variable Swapping</h2>";
echo "<p>Before swapping: a = " . $a . ", b = " . $b . "</p>";

$temp = $a;
$a = $b;
$b = $temp;

echo "<p>After swapping: a = " . $a . ", b = " . $b . "</p>";

// 3. Data Types and Variable Information

$intVar = 123;
$floatVar = 3.14;
$stringVar = "Hello, PHP!";
$boolVar = true;
$arrayVar = array(1, 2, 3);
$nullVar = null;

echo "<h2>Data Types and Variable Information</h2>";

echo "<div class='data-type-info'>";
echo "<strong>intVar:</strong><br>";
echo "Value: "; var_dump($intVar);
echo "<br>Type: " . gettype($intVar);
echo "</div>";

echo "<div class='data-type-info'>";
echo "<strong>floatVar:</strong><br>";
echo "Value: "; var_dump($floatVar);
echo "<br>Type: " . gettype($floatVar);
echo "</div>";

echo "<div class='data-type-info'>";
echo "<strong>stringVar:</strong><br>";
echo "Value: "; var_dump($stringVar);
echo "<br>Type: " . gettype($stringVar);
echo "</div>";

echo "<div class='data-type-info'>";
echo "<strong>boolVar:</strong><br>";
echo "Value: "; var_dump($boolVar);
echo "<br>Type: " . gettype($boolVar);
echo "</div>";

echo "<div class='data-type-info'>";
echo "<strong>arrayVar:</strong><br>";
echo "Value: "; var_dump($arrayVar);
echo "<br>Type: " . gettype($arrayVar);
echo "</div>";

echo "<div class='data-type-info'>";
echo "<strong>nullVar:</strong><br>";
echo "Value: "; var_dump($nullVar);
echo "<br>Type: " . gettype($nullVar);
echo "</div>";
?>
<a href="phptask2.php">Check Task#2</a>
</body>
</html>