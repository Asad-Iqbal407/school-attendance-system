<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>Mark Attendance</h1>
    <form action="mark_attendance.php" method="POST">
        <div>
            <label for="student_id">Student ID</label>
            <select name="student_id" id="student_id" required>
                <?php
                include('../config/db.php');
                $result = $conn->query("SELECT id, name FROM students");
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . " (ID: " . $row['id'] . ")</option>";
                }
                $conn->close();
                ?>
            </select>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
        </div>
        <button type="submit">Mark Attendance</button>
    </form>
</div>
<?php include('../includes/footer.php'); ?>
