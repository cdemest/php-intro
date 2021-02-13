<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro - Working with Strings</title>
</head>
<body>
    <?php
        $phrase1 = "kostas";
        $phrase2 = "demestichas";
        $name = $phrase1 . " " . $phrase2;
        
        echo $name . "<br>";
        echo ucfirst($name) . "<br>";
        echo ucwords($name) . "<br>"; 
        echo strtoupper($name) . "<br>";
        echo strtolower("MY NAME") . "<br>";
        echo str_repeat("a", 10) . "<br>";
        echo substr($name, 7, 6) . "<br>";
        echo strpos($name, "d") . "<br>";
        echo strchr($name, "d") . "<br>";
        echo strlen($name) . "<br>";
        echo trim("   " . $name . "    ") . "<br>";
        echo str_replace("e", "3", $name);
    ?>
</body>
</html>