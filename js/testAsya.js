var ajaxURL = 'php/getDataForParticularPage.php';

$.ajax({
    type: 'GET',
    url: ajaxURL,
    dataType: 'html',
    data: 'query=' + 'ffff'
}).done(function(result) {
    console.log(result);
});