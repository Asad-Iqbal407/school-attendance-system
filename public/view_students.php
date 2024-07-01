<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>View Students</h1>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../config/db.php');
            $result = $conn->query("SELECT * FROM students");
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
                echo "<td>" . $row['roll_number'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include('../includes/footer.php'); ?>
