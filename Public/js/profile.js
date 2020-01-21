const URL = 'http://localhost/projects/PAI2019';

let userId;
let currentPage = 1;

let teaTemplate;
let newTeaTemplate;

$(document).ready(function() {
    userId = $('#user-id').val();
    teaTemplate = $('.collection-item-template').html();
    newTeaTemplate = $('.collection-new-item-template').html();

    $('.current-temp').html("0");
    $('#tea-temperature').on('input', function(newValue) {
        $('.current-temp').html($(this).val());
    });

    displayCollectionPage(1);
});

function clearDuplicateTags(){
    /*$('.collection-item-wrapper').each(function() {
        $(this).remove();
    });*/
    $('.collection').empty();
    $('#pagination-nav').empty();
}

function displayCollectionPage(page) {
    if (page < 1 || page > getPageCount()){
        return;
    }

    currentPage = page;
    clearDuplicateTags();
    let teas = getCollectionPage(page);

    teas.forEach(tea => {
        let item = $(teaTemplate).clone();

        $(item).find('.collection-item-id').attr("value", tea.Id);

        var imgLink = "Public/img/tea_" + tea.Type.split(" ")[0].toLowerCase() + ".png";
        $(item).find('img').attr("src", imgLink);

        $(item).find('.collection-item-name').html(tea.Name);

        $('.collection').append($(item));
    });

    if (teas.length < 6){
        $('.collection').append($(newTeaTemplate));
    }

    let collectionSize = getCollectionSize();
    if (collectionSize >= 6){

        $('#pagination-nav').append('<ul class="pagination justify-content-center btn-group"></ul>');
        var pagination = $('.pagination');

        $(pagination).append('<li class="page-item"><button class="btn page-link" onclick="displayCollectionPage('+ parseInt(currentPage - 1) +')"><i class="fas fa-arrow-left"></i></button></li>');
        $(pagination).append('<li class="p-2">'+ currentPage +'</li>')
        $(pagination).append('<li class="page-item"><button class="btn page-link" onclick="displayCollectionPage('+ parseInt(currentPage + 1) +')"><i class="fas fa-arrow-right"></i></button></li>');
    }
}

function getPageCount(){
    let collectionSize = getCollectionSize();
    return (collectionSize + 1)/6 + 1
}

function getCollectionSize(){
    let retval = 0;
    $.ajax({
        url: URL + '/?page=get_collection_size',
        dataType: 'json',
        success: function(collectionSize){
            retval = collectionSize;
        },
        async: false
    });
    return retval
}

function getCollectionPage(page){
    let retval = [];
    $.ajax({
        url: URL + '/?page=get_collection&pagenr=' + page,
        dataType: 'json',
        success: function(teas){
            retval = teas;
        },
        async: false
    });
    return retval;
}

function newTea(){
    $('.add-tea-form').css('visibility', 'visible');
}

function cancelNewTea(){
    let form = $('.add-tea-form');
    $(form).css('visibility', 'hidden');

    $(form).find('#tea-name').val('');
    $(form).find('#tea-type').val('Black Tea');
    $(form).find('#tea-temperature').val('0');
    $(form).find('#tea-time-minutes').val('');
    $(form).find('#tea-time-seconds').val('');
    $(form).find('#tea-proportions').val('');
    $(form).find('#tea-notes').val('');
}

function addTea(){
    let form = $('.add-tea-form');

    let name = $(form).find('#tea-name').val();
    let type = $(form).find('#tea-type').val();
    let temperature = parseInt($(form).find('#tea-temperature').val());
    let time = parseInt($(form).find('#tea-time-minutes').val()) * 60 + parseInt($(form).find('#tea-time-seconds').val());
    let proportions = parseFloat($(form).find('#tea-proportions').val());
    let notes = $(form).find('#tea-notes').val();

    let tea = {Name: name, Type: type, Temperature: temperature, SteepingTime: time, LeafAmount: proportions, Notes: notes, UserId: userId};
    if (!verifyNewTea(tea)){
        alert("Wrong input!");
        return;
    }

    $.ajax({
        url: URL + '/?page=add_tea',
        type: 'GET',
        data: tea,
        success: function(){
            cancelNewTea();
            displayCollectionPage(currentPage);
        }
    })
}

function verifyNewTea(tea){
    if (
        tea.Name.length === 0 ||
        tea.Type.length === 0 ||
        isNaN(tea.Temperature) ||
        isNaN(tea.SteepingTime) ||
        isNaN(tea.LeafAmount)
    ) {
        return false;
    }
    return true;
}
