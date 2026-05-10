<?php
header("Content-Type: application/json");
include "db.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }

} else {
    echo json_encode(["status" => "missing data"]);
}
?>