/*
$(document).ready(function() {
    console.log('in jquery');
    $('body').on('click', '.pagination a', function(e) {
        console.log('start function');
        e.preventDefault();
        let url = $(this).attr('href');

        $.get(url, function(data) {
            let mainDiv = $(".users", data);
            $('.users').html(mainDiv);

        });
        console.log('end function');
    });
});
*/

// user table search

