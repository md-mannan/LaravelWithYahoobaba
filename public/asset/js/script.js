$(document).ready(function () {
    $('#alert').addClass('show');
    setTimeout(() => {
        $('#alert').removeClass('show');
        $('#alert').fadeOut(1000);
    }, 3000);
});