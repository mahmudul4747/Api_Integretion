<?php

include 'db.php';

$sql = "SELECT * FROM studentdata1";
$result = mysqli_query($conn, $sql);

$data = [];

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

} else {

    // fallback demo data (PHP array format)
    echo json_encode([
        [
            "id" => 1,
            "name" => "Mahmud",
            "email" => "mahmud@gmail.com",
            "department" => "CSE",
            "semester" => "8th",
            "github" => "https://github.com/mahmudul4747",
            "cv" => "https://example.com/cv.pdf"
        ]
    ]);

}

?>