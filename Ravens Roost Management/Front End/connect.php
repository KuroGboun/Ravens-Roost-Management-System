<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die("Connection Failed: " . mysqli_connect_error());

    $table = mysqli_real_escape_string($conn, $_POST['table']);
    $First_Name = isset($_POST['fname']) ? mysqli_real_escape_string($conn, $_POST['fname']) : '';
    $Last_Name = isset($_POST['lname']) ? mysqli_real_escape_string($conn, $_POST['lname']) : '';
    $ID = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $Time = isset($_POST['time']) ? mysqli_real_escape_string($conn, $_POST['time']) : '';
    $Out = isset($_POST['out']) ? mysqli_real_escape_string($conn, $_POST['out']) : '';

    $fields = [];
    $values = [];

    if (!empty($First_Name)) {
        $fields[] = "`First Name`";
        $values[] = "'$First_Name'";
    }
    if (!empty($Last_Name)) {
        $fields[] = "`Last Name`";
        $values[] = "'$Last_Name'";
    }
    if (!empty($ID)) {
        $fields[] = "`Student ID`";
        $values[] = "'$ID'";
    }
    if (!empty($Time)) {
        $fields[] = "`Time Slot`";
        $values[] = "'$Time'";
    }
    if (!empty($Out)) {
        $fields[] = "`Check Out`";
        $values[] = "'$Out'";
    }

    if (!empty($fields)) {
        $fields_list = implode(", ", $fields);
        $values_list = implode(", ", $values);
        $sql = "INSERT INTO `$table` ($fields_list) VALUES ($values_list)";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: home.php?success=true");
            exit();
        } else {
            echo 'Error Occurred: ' . mysqli_error($conn);
        }
    } else {
        echo 'No fields provided.';
    }
} else {
    echo 'Invalid request method.';
}
?>
