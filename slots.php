<?php
$slotQuery = "SELECT slots.id, slots.slot_time, slots.capacity, 
              (SELECT COUNT(*) FROM students WHERE students.slot_id = slots.id) as booked
              FROM slots";
$result = $conn->query($slotQuery);
$slots = [];
while ($row = $result->fetch_assoc()) {
    $row['available'] = $row['capacity'] - $row['booked'];
    $slots[] = $row;
}
?>