<?php
header("Content-Type: application/json");
include "db.php";

// check all fields
if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['phone'])
) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];

    // check email already exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Email already exists"
        ]);
    } else {

        // insert user
        $sql = "INSERT INTO users (username, email, password, phone)
                VALUES ('$username', '$email', '$password', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode([
                "status" => "success",
                "message" => "User registered successfully"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Registration failed"
            ]);
        }
    }

} else {
    echo json_encode([
        "status" => "error",
        "message" => "Missing fields"
    ]);
}

$conn->close();
?>