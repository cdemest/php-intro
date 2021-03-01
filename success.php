<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        require_once 'db/conn.php'; 
    ?>

    <h2>Trying to insert values...</h2>

    <?php 
        $isSuccess = $crud->insert("Kostas", "Demestichas", 1982, "cdemest@gmail.com", "Lecturer");

        if ($isSuccess) {
            echo "<h1>Success!</h1>";
        } else {
            echo "<h1>OMG!</h1>";
        }
        
    ?>

</body>
</html>