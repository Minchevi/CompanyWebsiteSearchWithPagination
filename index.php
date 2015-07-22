<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <title>Companies</title>
</head>
<body>
<h1 class="text-center">Company website searching tool</h1>
<div class="container">
    <div class="row">
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" class="  search-query form-control" placeholder="Enter the company's name..." id="query" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button" onclick="sendQuery()">
                            <span class=" glyphicon glyphicon-search"></span>
                        </button>
                    </span>
            </div>
        </div>
    </div>
    <table class="table" id="table-content">

    </table>

    <div class="text-center">
        <ul class="pagination" id="pagination-block">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
     </div>
</div>

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
echo $query;
echo $page;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/sendQuery.js"></script>
<script src="js/testAsya.js"></script>
</body>
</html>