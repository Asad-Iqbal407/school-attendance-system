<?php
include('../config/db.php');

$name = $_POST['name'];
$class = $_POST['class'];
$roll_number = $_POST['roll_number'];

$sql = "INSERT INTO students (name, class, roll_number) VALUES ('$name', '$class', $roll_number)";
if ($conn->query($sql) === TRUE) {
    echo "New student created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: add_student.php');
?>
