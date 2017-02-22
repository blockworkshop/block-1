(function ($) {

    "use strict";

    $("#contact").validate();
    
    /* =================================
    ===  CONTACT FORM               ====
    =================================== */
    $("#contact").submit(function (e) {
        e.preventDefault();
        var name = $("#form-name").val();
        // var email = $("#form-email").val();
        var subject = $("#form-subject").val();
        var message = $("#form-message").val();
        var dataString = 'name=' + name  + '&subject=' + subject + '&message=' + message;


      

        if (1) {
            $.ajax({
                type: "POST",
                url: "send-mail.php",
                data: dataString,
                success: function () {
                    $('.successContent').fadeIn(1000);
                    $('.errorContent').fadeOut(500);
                }
            });
        }
        else {
            $('.errorContent').fadeIn(1000);
            $('.successContent').fadeOut(500);
        }
        return false;
    });



  
})(jQuery);


