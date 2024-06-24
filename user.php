<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Example user-specific data
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome, <?php echo $email; ?></h1>
    <!-- Add your user page content here -->
    <p>This is your user page. You can add more content here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
