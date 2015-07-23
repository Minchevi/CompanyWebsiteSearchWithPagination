<?php
$count = json_decode($count, true);

$selectedPage = intval($page);
$maxPage = ceil(intval($count[0]["count(*)"])/10);


echo '<div class="text-center" id="pagination-div">
        <ul class="pagination" id="pagination-block">';

if($selectedPage>1){
    $previousPage = $selectedPage - 1;
    echo '<li  onclick="sendQuery()"><a href="#" onclick="page=1"> 1 </a></li>';
}

if($selectedPage>3)
echo '<li><a>...</a></li>';

if($selectedPage>2){
    $previousPage = $selectedPage - 1;
    echo '<li  onclick="sendQuery()"><a href="#" onclick="page=' . $previousPage . '"> ' . $previousPage . ' </a></li>';
}

echo '<li class="active"><a href="#"' . $selectedPage . '">' . $selectedPage .'</a></li>';

if($selectedPage<$maxPage-1){
    $nextPage = $selectedPage + 1;
    echo '<li onclick="sendQuery()"><a href="#" onclick="page=' . $nextPage . '">' . $nextPage .'</a></li>';
}

if($selectedPage<$maxPage-2)
    echo '<li><a>...</a></li>';

if($selectedPage!=$maxPage)
    echo '<li  onclick="sendQuery()"><a href="#" onclick="page=' . $maxPage . '">' . $maxPage .'</a></li>';




echo '</ul>
     </div>';