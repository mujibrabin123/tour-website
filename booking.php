<?php
session_start();
require('db_connection.php');

function handle_booking() {
    global $conn;

    if (!isset($_SESSION['user_id'])) {
        die("User is not logged in.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $place_name = sanitize($_POST['place_name']);
        $number_of_guests = (int)$_POST['number_of_guests'];
        $arrival_date = sanitize($_POST['arrival_date']);
        $leaving_date = sanitize($_POST['leaving_date']);
        $user_id = $_SESSION['user_id'];

        // Prepare the SQL statement
        $query = "INSERT INTO bookings (place_name, number_of_guests, arrival_date, leaving_date, user_id) 
                  VALUES (?, ?, ?, ?, ?)";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("sissi", $place_name, $number_of_guests, $arrival_date, $leaving_date, $user_id);
            if ($stmt->execute()) {
                echo "Booking successful.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}

// Sanitize user input
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($data));
}

// Handle the booking
handle_booking();

// Close the database connection
$conn->close();
?>
