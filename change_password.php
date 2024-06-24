<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require('db_connection.php');


$user_id = $_SESSION['user_id'];


$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

   
    if (password_verify($current_password, $user['password'])) {
      
        if ($new_password === $confirm_password) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql_update_password = "UPDATE users SET password = ? WHERE id = ?";
            $stmt_update_password = $conn->prepare($sql_update_password);
            $stmt_update_password->bind_param('si', $hashed_password, $user_id);
            if ($stmt_update_password->execute()) {
               
                header("Location: user_profile.php?password_success=1");
                exit();
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "New password and confirm password do not match.";
        }
    } else {
        echo "Current password is incorrect.";
    }
}
?>
