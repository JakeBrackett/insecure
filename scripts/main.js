$(function() {
    // Sidebar toggle button on mobile
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
        $('#sidebar-toggle').toggleClass('glyphicon-chevron-left glyphicon-chevron-right');
    });
    
    // Secure/Insecure button
    $('#secure').click(function(event){
        $(this).toggleClass('insecure secure');
        $(this).find('i').toggleClass('glyphicon-lock glyphicon-remove-sign');
         var text = $('#secure').text();
        
        // In the contents of #secure, filter for nodeType 3 (text). Select the first element returned (the only text), and replace it with
        // either inSecure or Secure depending on what it is currently. (That's a mouthful)
        $("#secure").contents().filter(function(){ return this.nodeType == 3; }).first().replaceWith((text == " Secure") ? " inSecure" : " Secure");
        
        // Deselect element so it doesn't look ugly
        $(this).blur();
        
        if(!Cookies.get('!secure')){
            Cookies.set('!secure', 'true');
        } else {
            Cookies.remove('!secure');
        }
    });
    
    // Login form AJAX
    form = $('#login-form');
    form.submit(function(event) {
        event.preventDefault();
        console.log("logging in");
        $.post("login.php", form.serialize()).done(function(data) {
            if(data == "success"){
                $('#login-modal').modal('hide');
                window.location.href = 'index.php';
            }
            else{
                // error
                $('#login-error').hide().fadeIn();
            }
        });
    });
});

