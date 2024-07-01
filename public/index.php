<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>Welcome to the School Attendance System</h1>
    <div class="slider">
        <div class="slides">
            <img src="/school-attendance-system/assets/images/image.png" alt="Education">
            <img src="/school-attendance-system/assets/images/image2.png" alt="Education 2">
            <img src="/school-attendance-system/assets/images/image3.png" alt="Education 3">
        </div>
    </div>
    <p>This system allows you to manage student attendance efficiently and effectively. Use the navigation links above to explore different sections of the system.</p>

    <div class="dashboard-sections">
        <section class="dashboard-section">
            <h2>Manage Students</h2>
            <p>View, add, or update student records.</p>
            <a href="add_student.php" class="btn">Add Student</a>
            <a href="view_students.php" class="btn">View Students</a>
        </section>

        <section class="dashboard-section">
            <h2>Manage Attendance</h2>
            <p>Mark and view attendance records.</p>
            <a href="attendance.php" class="btn">Mark Attendance</a>
            <a href="view_attendance.php" class="btn">View Attendance</a>
        </section>
    </div>
</div>
<?php include('../includes/footer.php'); ?>
