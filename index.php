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
                <input type="text" value="<?=isset($_GET['query']) ? $_GET['query'] : '' ?>" class="  search-query form-control" placeholder="Enter the company's name..." id="query" />
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
            <li><a href="#" onclick="page=1">1</a></li>
            <li class="active"><a href="#" onclick="page=2;">2</a></li>
            <li><a href="#" onclick="page=3">3</a></li>
            <li><a href="#" onclick="page=4">4</a></li>
            <li><a href="#" onclick="page=5">5</a></li>
        </ul>
     </div>
</div>

<?php

include 'php/getPageAndQuery.php';

?>

<script>
    var page=1;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/sendQuery.js"></script>
<!--<script src="js/testAsya.js"></script>-->
</body>
</html>