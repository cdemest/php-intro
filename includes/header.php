<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro - <?php echo $title; ?></title>
</head>

<body>
    <!-- Basic HTML -->
    <h1>Hello World</h1>

    <?php
// This is a PHP comment
echo 'Hello PHP!';
echo '<br>';
echo 'Second Line';
?>

    <?php
$name = 'Kostas';
$salary = 800;
echo '<br>';
echo '<h2>My name is: ' . $name . '</h2>';
echo "<h3>Salary is: $salary $.</h3>";
?>

    <h2>Use the following menu of tutorials</h2>
    <ul>
        <li><a href="array.php">Array</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="dowhileloop.php">Do While</a></li>
        <li><a href="whileloop.php">While Do</a></li>
        <li><a href="ifstatement.php">If Statement</a></li>
        <li><a href="switchstatement.php">Switch</a></li>
        <li><a href="stringwork.php">Working with Strings</a></li>
    </ul>
