<?php
include "db.php";
$id = $_POST['id'];
$slot_id = $_POST['slot_id'];

$update = "UPDATE students SET slot_id=$slot_id WHERE id='$id'";
if ($conn->query($update)) {
    header("Location: success.php");
} else {
    echo "Error updating record: " . $conn->error;
}
?>