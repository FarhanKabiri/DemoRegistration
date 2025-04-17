<?php
include "db.php";

$id = $_POST['id'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$project = $_POST['project_title'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$slot_id = $_POST['slot_id'];

// Check if student already exists
$check = $conn->query("SELECT * FROM students WHERE id = '$id'");
if ($check->num_rows > 0) {
    header("Location: confirm.php?id=$id&slot_id=$slot_id");
    exit();
}

// Check if slot is full
$count = $conn->query("SELECT COUNT(*) as total FROM students WHERE slot_id = $slot_id")->fetch_assoc()['total'];
$capacity = $conn->query("SELECT capacity FROM slots WHERE id = $slot_id")->fetch_assoc()['capacity'];

if ($count < $capacity) {
    $stmt = $conn->prepare("INSERT INTO students (id, first_name, last_name, project_title, email, phone, slot_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $id, $first, $last, $project, $email, $phone, $slot_id);
    $stmt->execute();
    header("Location: success.php");
    exit();
} else {
    echo "Sorry, the selected time slot is full. Please go back and choose another one.";
}
?>
