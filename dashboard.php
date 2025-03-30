<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ensure user_name is set
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "User";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voting System</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure this file exists -->
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user_name); ?>! 🎉</h2>
    <p>You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
