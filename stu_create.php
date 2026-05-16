<?php

include 'db.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$deprement  = $_POST['deprement'];
$semestet   = $_POST['semestet'];

$sql = "INSERT INTO studentdata1(name,email,deprement,semestet)
VALUES('$name','$email','$deprement','$semestet')";

$result = mysqli_query($conn,$sql);

if($result){
    echo json_encode([
        "status" => "success",
        "message" => "Student Added"
    ]);
}else{
    echo json_encode([
        "status" => "error",
        "message" => "Insert Failed"
    ]);
}

?>