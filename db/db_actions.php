<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['type'] == 'select') {
    $sql = "SELECT * FROM users where `username`='".$_POST['username']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo true;
    } else {
        echo false;
    }
}

if ($_POST['type'] == 'update') {
    $sql = "update `users` set `client_socket_id`='".$_POST['client_socket_id']."' where `username`='".$_POST['username']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo true;
    } else {
        echo false;
    }
}

$conn->close();
?>