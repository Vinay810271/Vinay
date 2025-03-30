<?php
session_start();
session_destroy();
session_unset(); // Clears all session variables
header("Location: login.php?logout=success");
exit();
?>
