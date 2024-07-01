<?php include('../includes/header.php'); ?>
<div class="container">
    <h1>Login</h1>
    <form action="login_process.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
<?php include('../includes/footer.php'); ?>
