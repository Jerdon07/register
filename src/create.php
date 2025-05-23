<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Create User</title>
</head>
<body>
    <div class="container">
        <h2 class="title">CREATE USER</h2>
        <form method="POST" action="./read.php">
            <input type="email" name="gmail" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button class="register-btn" onclick="window.location.href='./read.php';">CREATE</button>
        </form>
        <a href="./read.php">Already have an Account?</a>
    </div>
</body>
</html>