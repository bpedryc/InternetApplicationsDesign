let currentPage = 1;
let pageCount;

let itemTemplate;

$(document).ready(function() {
    pageCount = getPageCount();
    displayItemPage(1);

    templateName =
    itemTemplate = $()
});

function clearContent(){
    $('.pagination-content').empty();
    $('.pagination-nav').empty();
}

function displayItemPage(page) {
    if (page < 1 || page > pageCount){
        return;
    }

    currentPage = page;
    clearContent();

    let items = getItemPage(page);

    items.forEach(item => {
        let itemTemplate = $(teaTemplate).clone();

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