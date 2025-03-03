<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
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

        .operator-result {
            background-color: #e0f7fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            border: 1px solid #b2ebf2;
        }
        .operator-result strong {
            color: #00838f;
        }
    </style>
</head>
<body>

<?php
// 1. Arithmetic Operators

$num1 = 10;
$num2 = 5;

echo "<h2>Arithmetic Operators</h2>";
echo "<div class='operator-result'>";
echo "<strong>Addition:</strong> " . ($num1 + $num2) . "<br>";
echo "<strong>Subtraction:</strong> " . ($num1 - $num2) . "<br>";
echo "<strong>Multiplication:</strong> " . ($num1 * $num2) . "<br>";
echo "<strong>Division:</strong> " . ($num1 / $num2) . "<br>";
echo "<strong>Modulo:</strong> " . ($num1 % $num2) . "<br>";
echo "</div>";

// 2. Comparison Operators

$a = 15;
$b = 20;

echo "<h2>Comparison Operators</h2>";
echo "<div class='operator-result'>";
echo "<strong>\$a == \$b:</strong> " . ($a == $b ? "true" : "false") . "<br>";
echo "<strong>\$a != \$b:</strong> " . ($a != $b ? "true" : "false") . "<br>";
echo "<strong>\$a > \$b:</strong> " . ($a > $b ? "true" : "false") . "<br>";
echo "<strong>\$a < \$b:</strong> " . ($a < $b ? "true" : "false") . "<br>";
echo "<strong>\$a >= \$b:</strong> " . ($a >= $b ? "true" : "false") . "<br>";
echo "<strong>\$a <= \$b:</strong> " . ($a <= $b ? "true" : "false") . "<br>";
echo "</div>";

// 3. Assignment Operators

$x = 10;

echo "<h2>Assignment Operators</h2>";
echo "<div class='operator-result'>";
echo "<strong>Initial \$x:</strong> " . $x . "<br>";

$x += 5;
echo "<strong>\$x += 5:</strong> " . $x . "<br>";

$x -= 3;
echo "<strong>\$x -= 3:</strong> " . $x . "<br>";

$x *= 2;
echo "<strong>\$x *= 2:</strong> " . $x . "<br>";

$x /= 4;
echo "<strong>\$x /= 4:</strong> " . $x . "<br>";

$x %= 3;
echo "<strong>\$x %= 3:</strong> " . $x . "<br>";
echo "</div>";

// 4. Logical Operators

$isTrue = true;
$isFalse = false;

echo "<h2>Logical Operators</h2>";
echo "<div class='operator-result'>";
echo "<strong>\$isTrue AND \$isFalse:</strong> " . ($isTrue && $isFalse ? "true" : "false") . "<br>";
echo "<strong>\$isTrue OR \$isFalse:</strong> " . ($isTrue || $isFalse ? "true" : "false") . "<br>";
echo "<strong>NOT \$isTrue:</strong> " . (!$isTrue ? "true" : "false") . "<br>";
echo "<strong>\$isTrue XOR \$isFalse:</strong> ". ($isTrue xor $isFalse ? "true" : "false") ."<br>";
echo "</div>";

?>

</body>
</html>