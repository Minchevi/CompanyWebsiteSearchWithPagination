<?php
if(empty($_GET["query"]) or isset($_GET["query"]) and $_GET["query"]==""){
    $query = '';
} else{
    $query = $_GET["query"];
}

if(empty($_GET["page"]) or isset($_GET["page"]) and $_GET["page"]==""){
    $page =1;
} else{
    $page = $_GET["page"];
}

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

$query = mysqli_real_escape_string($conn, trim($query));
$page = mysqli_real_escape_string($conn, trim($page));

if(!ctype_digit($page) ){
    $page=1;
}

$rowIndex = 10 * ($page-1);
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

$json = json_encode($output);
include 'php/displayData.php';

exit();