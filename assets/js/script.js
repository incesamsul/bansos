$(document).ready(function() {
    console.log($('.isMenerima'))
        // $('.isMenerima').on('change', function() {
        //     console.log($(this));
        // })
    $('.preview-foto').on('click', function() {

        $($(this).prev()).css('width', '100px');
        $($(this).prev()).css('transform', 'scale(5)');
        $($(this).prev()).on('click', function() {
            $(this).css('width', '0');
        })
    })
});