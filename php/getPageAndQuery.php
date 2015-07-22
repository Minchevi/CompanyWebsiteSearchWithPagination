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
echo $page;
echo '<br>';
echo $query;

// 1. connect to mysql
// 2. get data (query, page)
// 3. close mysql connection
// 4. send data to browser
