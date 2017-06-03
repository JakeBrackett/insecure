$(function () {
    $('#newPassword, #newPasswordConfirm').blur(function(){
        $("#divCheckPasswordMatch").fadeIn();
    });
    
    $("#newPassword, #newPasswordConfirm").keyup(function() {
        var pswdiv = $("#divCheckPasswordMatch");
        var submit = $("#regSubmit");
        if($("#newPassword").val() === $("#newPasswordConfirm").val()){
            pswdiv.removeClass("alert-danger");
            pswdiv.addClass("alert-success");
            pswdiv.contents().filter(function(){ return this.nodeType == 3; }).first().replaceWith("Passwords Match!");
            submit.prop('disabled', false);
        } else{
            pswdiv.removeClass("alert-success");
            pswdiv.addClass("alert-danger");
            pswdiv.contents().filter(function(){ return this.nodeType == 3; }).first().replaceWith("Passwords do not match!");
            submit.prop('disabled', true);
        }
   });
});

