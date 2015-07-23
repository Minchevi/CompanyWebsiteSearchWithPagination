<?php


$myPage = intval($page) - 1;
$maxPage = 10; // SHOULD GET THE MAXIMUM POSSIBLE PAGE USING SQL? :?


echo '<div class="text-center" id="pagination-div">
        <ul class="pagination" id="pagination-block">';

echo '<li onclick="sendQuery()"><a href="#" onclick="page=1"> << </a></li>';
if(intval($page)>1){
    echo '<li  onclick="sendQuery()"><a href="#" onclick="page=' . $myPage . '">' . $myPage .'</a></li>';
}
$myPage++;
echo '<li class="active"><a href="#"' . $myPage . '">' . $myPage .'</a></li>';

$myPage++;
if($myPage<$maxPage){
    echo '<li  onclick="sendQuery()"><a href="#" onclick="page=' . $myPage . '">' . $myPage .'</a></li>';
}


echo '</ul>
     </div>';

