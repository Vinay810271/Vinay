<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "voting_system";

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Database Connection
    $conn = new mysqli($servername, $username, $password, $database);
    $conn->set_charset("utf8mb4"); // Set character encoding for better compatibility
} catch (Exception $e) {
    // Show a user-friendly error message
    die("❌ Database Connection Failed: " . $e->getMessage());
}
?>
