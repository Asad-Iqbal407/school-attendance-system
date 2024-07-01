<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>Add Student</h1>
    <form action="save_student.php" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="class">Class</label>
            <input type="text" name="class" id="class" required>
        </div>
        <div>
            <label for="roll_number">Roll Number</label>
            <input type="number" name="roll_number" id="roll_number" required>
        </div>
        <button type="submit">Add Student</button>
    </form>
</div>
<?php include('../includes/footer.php'); ?>
