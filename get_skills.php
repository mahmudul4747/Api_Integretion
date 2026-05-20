<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "studentdb"
);

$query = mysqli_query($conn,
    "SELECT * FROM skills");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data);

?>