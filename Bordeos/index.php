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
        $stmt = $pdo->prepare("INSERT INTO Patients (patient_id, first_name, last_name, dob, gender, contact_number, email, address, created_at) VALUES (?,?,?,?,?,?,?,?,?");

        $executeQuery = $stmt->execute(51, "Monkey", "Luffy", "7/6/1995", "Male", "091234567980", "monkeydluffy@outlook.com", "Whiskey Peak", "2024-06-02 00:19:18");
        
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