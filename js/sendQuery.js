function sendQuery(){
    var query = $('#query').val();
    url = "?query="+encodeURIComponent(query)+'&page='+encodeURIComponent(page);
    window.location.href = url;
}