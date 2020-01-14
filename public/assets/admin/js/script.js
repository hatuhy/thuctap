$(document).ready(function () {
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
});
$(document).ready(function(){
    $('.btn-search').click(function(){
        $('.change-infor').toggleClass('d-block');
    })
})

