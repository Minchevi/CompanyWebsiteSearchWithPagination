<?php

if(empty($_GET["query"]) or isset($_GET["query"]) and $_GET["query"]==""){
    $query = '';
}
else{
    $query = $_GET["query"];
}

if(empty($_GET["page"]) or isset($_GET["page"]) and $_GET["page"]==""){
    $page =1;
}
else{
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
$sql = "SELECT *
        FROM (SELECT ROW_NUMBER() OVER (ORDER BY OrderDate) AS RowNum,
              name,
              website
        FROM companies
        WHERE name like '%" . $query . "%'
        ORDER BY name
        ) AS RowConstrainedResult
        WHERE   RowNum >= " . $page . "* 10 + 1
        AND RowNum <= " . $page . "*10 + 10
        ORDER BY RowNum";
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