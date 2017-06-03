
$(function(){ 
    var guestbookform = $('#guestbook-form');
    guestbookform.submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "getguestbook.php",
            data: guestbookform.serialize(), // seperates each form parameter to its own GET variable
            success: function(data)
            {
                console.log("Submission Logged");
                console.log(data);
                var $div = $('<div>', {"class": "entry"});
                $div.html(data); // the php responds with formatted html to be placed in the div
                $div.hide().prependTo('#col1').fadeIn(500);
            },
            error: function(data) {
                console.log('Submission Error');
                console.log(data);
                $('#error').fadeIn();
            }
         });
    });
});

