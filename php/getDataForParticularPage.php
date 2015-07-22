<?php

print_r($_REQUEST);
exit();

$queryRequest = file_get_contents("php://input");
$query = "vfs";
$page = "432";
$servername = "*";
$username = "*";
$password = "*";
$dbname = "*";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$queryRequest = mysqli_real_escape_string($conn, trim($queryRequest));

if(ctype_digit($page) ){
    $page=1;
}
$rowIndex = 10 * $page;
$query = mysqli_real_escape_string($conn, trim($query));
$sql = "SELECT name,
               website
        FROM companies
        WHERE name like '%" . $query . "%'
        ORDER BY name
        LIMIT 10
        OFFSET " . $rowIndex ;
$result = $conn->query($sql);
$output = array();

while(($row = $result->fetch_assoc())) {
    $output[]=$row;
}

$conn->close();

header('Content-Type: application/json');
$json = json_encode($output);
echo $json;


exit();