<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        #prepare sql for execution
        $stmt = $pdo->prepare("SELECT * FROM procedures");


        #retrieves all row from result set 
        
        if ($stmt -> execute()) {
            echo '<pre>';
             print_r($stmt->fetch()); 
             echo '</pre>';
              #prints result
        }
        
    ?>
</body>
</html>