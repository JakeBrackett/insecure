
$(function(){ 
    form = $('#guestbook-form');
    form.submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "../ajax/getguestbook.php",
            data: form.serialize(), // seperates each form parameter to its own GET variable
            success: function(data)
            {
                console.log("Submission Logged");
                console.log(data);
                var $div = $('<div>', {"class": "entry"});
                $div.html(data); // the php responds with formatted html to be placed in the div
                $("#guestbook-entries").prepend($div);
            },
            error: function(data) {
                console.log('Submission Error');
                console.log(data);
                $('#error').fadeIn();
            }
         });
    });
});



