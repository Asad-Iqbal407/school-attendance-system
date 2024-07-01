<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>View Attendance</h1>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../config/db.php');
            $result = $conn->query("
                SELECT attendance.student_id, students.name, attendance.date, attendance.status
                FROM attendance
                JOIN students ON attendance.student_id = students.id
            ");
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
<?php include('../includes/footer.php'); ?>
