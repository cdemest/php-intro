<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro - Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php
// variable
$num = 3;

// array - onew data type
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

echo "<p>Just one example: $numbers[5]</p><br>"; // should print 60

// type all values
for ($counter = 0; $counter < count($numbers); $counter++) {
    echo "<p>$numbers[$counter]</p>";
}

// this will fail... 
echo "<p>Note that count($numbers) will not print the array size.</p>";
echo "<p>Use concatenation instead: " . count($numbers) . "</p>";

?>

</body>
</html>