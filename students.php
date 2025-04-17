<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registered Students</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Project</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Time Slot</th>
        </tr>
        <?php
        $result = $conn->query("SELECT s.*, sl.slot_time FROM students s JOIN slots sl ON s.slot_id = sl.id");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']} {$row['last_name']}</td>
                <td>{$row['project_title']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['slot_time']}</td>
            </tr>";
        }
        ?>
    </table>
    <script src="theme.js"></script>
</body>
</html>
