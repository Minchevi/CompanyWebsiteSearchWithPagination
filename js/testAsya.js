var ajaxURL = 'php/getDataForParticularPage.php';
$.ajax({
    type: 'POST',
    url: ajaxURL,
    dataType: 'text'
}).done(function(result) {
    console.log(result);
});