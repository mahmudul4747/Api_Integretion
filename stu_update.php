<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$semester = $_POST['semester'];

$sql = "UPDATE students SET 
name='$name',
email='$email',
department='$department',
semester='$semester'
WHERE id=$id";

$conn->query($sql);

echo json_encode(["success"=>true]);
?>