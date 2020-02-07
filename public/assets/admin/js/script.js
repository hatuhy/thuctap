$(document).ready(function () {
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
});
$(document).ready(function () {
    $('.btn-search').click(function () {
        $('.change-infor').toggleClass('d-block');
    })
})

$('#click').click(function () {
    $('#ajax_loader').css('display', 'block');
    setTimeout(function () {
        $('#ajax_loader').css('display', 'none');
    }, 2000);
});

$(document.body).append('<div id="page-loader"> <div style="margin-left: 54%;margin-top:14.5%;font-size:20px;">Loading ...</div>  </div>');
$(window).on("beforeunload", function () {
    // ... Show the Animation `.fadeIn()`
    $('#page-loader').fadeIn(1000).delay(2000).fadeOut(1300);
});

// datatable
$(document).ready( function () {
    $('#myTable').DataTable();
} );