<?php 
// Session start
session_start();

// Clear everything in session
session_destroy();

// Redirect back to home
header("Location: index.php");
?>
