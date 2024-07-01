<?php
include('../config/db.php');

$student_id = $_POST['student_id'];
$date = $_POST['date'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance (student_id, date, status) VALUES ($student_id, '$date', '$status')";
if ($conn->query($sql) === TRUE) {
    echo "Attendance marked successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: attendance.php');
?>
