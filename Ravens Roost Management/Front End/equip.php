<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = new mysqli('localhost', 'root', '', 'test'); // Adjust the database name if needed

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $table = mysqli_real_escape_string($conn, $_POST['table']);
    $ID = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $Check_In = isset($_POST['in']) ? mysqli_real_escape_string($conn, $_POST['in']) : '';

    $sql = "UPDATE `$table` SET `Check In` = '$Check_In' WHERE `Student ID` = '$ID'";

    if (mysqli_query($conn, $sql)) {
        echo "Check-in time updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo 'Invalid request method.';
}
?>
