<?php
// Database connection
$servername = "localhost";  // Server name
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "your_actual_database_name";  // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  // Establish connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // If connection fails, display error
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $time_slot = $_POST['time'];

    $sql = "UPDATE students SET `First Name`='$first_name', `Last Name`='$last_name', `Time Slot`='$time_slot' WHERE `Student ID`='$student_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
