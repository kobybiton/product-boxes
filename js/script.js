$('.button').on('click', function() {
    let id = $(this).data('id');
    $.ajax({
        url : 'php/Http.php',
        data : {
            id: id,
        },
        type : 'POST' ,
        success : function(response){
            $('#overlay').fadeIn();
            $('#popup').slideDown();
            $('#popup p').text(response);
        }
    });
});

$('.close-popup').on('click', function() {
    $('#overlay').fadeOut();
    $('#popup').slideUp();
    $('body').css({'background-color': '#fff', 'opacity': '1'});
});