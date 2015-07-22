function sendQuery(){
    var query = $('#query').val();
    url = "?query="+query;
    window.location.href = url;
    $.ajax({
        url: 'php/index.php',
        data: {query: query, page: 1},
        type: 'GET',
        success: function(response){
            window.location.href = response.redirect;
        }
    });
}