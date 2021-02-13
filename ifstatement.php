<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro - If then else</title>
</head>

<body>

<?php
// Trying the if statements
echo '<h2>If Statement</h2>';

$grade = 5;

if ($grade >= 5) {
    echo '<h3 style="color: green">Τα κατάφερες!</h3>';
} else {
    echo '<h3>Try again!</h3>';
}

// Other examples
$letter = 'C';
if ($letter == 'A') {
    echo '<h2>Είσαι αστέρι!</h2>';
} elseif ($letter == 'B') {
    echo '<h2>Καλά τα πήγες!</h2>';
} else {
    echo '<h2>Ωχ πρόσεχε!</h2>';
}

?>

</body>

</html>