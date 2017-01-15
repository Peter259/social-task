
$( document ).ready( function() {

    if ( $('.alert-success').length>0) {
        $('.alert-success').fadeOut(3000);
    }

    if ( $('.fb-login-btn').length==1) {
        $('.fb-login-btn').delay(500).fadeIn(1000);
    }
});
