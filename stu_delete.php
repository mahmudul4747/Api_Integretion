<?php

include 'db.php';

$id = $_POST['id'];

echo "ID: " . $id;
$sql = "DELETE FROM studentdata1 WHERE id='$id'";

$result = mysqli_query($conn,$sql);

if($result){
    echo json_encode([
        "status" => "success",
        "message" => "Student Deleted"
    ]);
}else{
    echo json_encode([
        "status" => "error",
        "message" => "Delete Failed"
    ]);
}

?>