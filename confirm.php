<?php include "db.php";
$id = $_GET['id'];
$slot_id = $_GET['slot_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Registration Change</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Confirm Slot Change</h2>
    <form action="update.php" method="POST" style="max-width: 500px; margin: auto;">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="slot_id" value="<?= $slot_id ?>">
        <p>You are already registered. Do you want to update your slot?</p>
        <input type="submit" name="confirm" value="Yes, update my slot">
    </form>


    <script src="theme.js"></script>
</body>
</html>