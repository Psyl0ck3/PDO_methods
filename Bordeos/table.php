<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
</head>
<body>
    <h1>Patient Records</h1>

    <?php
        $stmt = $pdo->query("SELECT * FROM Patients");

        $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1'>";
        echo "<tr><th>Patient ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Contact Number</th><th>Email</th><th>Address</th><th>Created At</th></tr>";
        
        foreach ($patients as $patient) {
            echo "<tr>";
            echo "<td>" . $patient['patient_id'] . "</td>";
            echo "<td>" . $patient['first_name'] . "</td>";
            echo "<td>" . $patient['last_name'] . "</td>";
            echo "<td>" . $patient['dob'] . "</td>";
            echo "<td>" . $patient['gender'] . "</td>";
            echo "<td>" . $patient['contact_number'] . "</td>";
            echo "<td>" . $patient['email'] . "</td>";
            echo "<td>" . $patient['address'] . "</td>";
            echo "<td>" . $patient['created_at'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>
