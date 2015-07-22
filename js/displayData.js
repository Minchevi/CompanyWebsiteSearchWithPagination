function displayData(companiesString) {
    var data = JSON.parse(companiesString);
    $(".company").remove();

    data.forEach(function (company) {
            $('#table-content').append('<tr class="company"><a href="' + company.website + '" target="_blank">' + company.name + '</a></li>');
    });
};