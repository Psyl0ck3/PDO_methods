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
        
        $stmt = $pdo->prepare("INSERT INTO Patients (patient_id, first_name, last_name, dob, gender, contact_number, email, address, created_at) VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->execute([55, "Gold", "Roger", "1975-11-12", "Male", "090238567910", "pirateking@outlook.com", "Laughtale", "2023-06-10 00:09:56"]);

        # Retrieve all rows from the result set
        $selectStmt = $pdo->query("SELECT * FROM Patients");
        $patients = $selectStmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        foreach ($patients as $patient) {
            print_r($patient);
            echo "\n";
        }
        echo "</pre>";
        
    ?>
</body>
</html>
