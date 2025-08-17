<?php

$connect = mysqli_connect("localhost", "root", "", "practice_laravelsample");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $query = "SELECT * FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($connect, $query);

    if(mysqli_num_rows($result) > 0) {
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
    exit;
}

?>