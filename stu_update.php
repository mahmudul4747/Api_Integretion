<?php

include 'db.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$email      = $_POST['email'];
$deprement  = $_POST['deprement'];
$semestet   = $_POST['semestet'];

$sql = "UPDATE studentdata1 
SET 
name='$name',
email='$email',
deprement='$deprement',
semestet='$semestet'
WHERE id='$id'";

$result = mysqli_query($conn,$sql);

if($result){
    echo json_encode([
        "status" => "success",
        "message" => "Student Updated"
    ]);
}else{
    echo json_encode([
        "status" => "error",
        "message" => "Update Failed"
    ]);
}

?>