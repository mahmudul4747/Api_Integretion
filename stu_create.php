<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$semester = $_POST['semester'];

$sql = "INSERT INTO students(name,email,department,semester)
VALUES('$name','$email','$department','$semester')";

$result = $conn->query($sql);

echo json_encode(["success" => true]);
?>