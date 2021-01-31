$(function() {

    // Get the form.
    var form = $('#contact');

    // Get the messages div.
    var formMessages = $('#msg');

    // TODO: The rest of the code will go here...

    $(form).submit(function(event) {

        // Stop the browser from submitting the form.
        event.preventDefault();
    
        let formData = $(form).serialize();
        let x;

        $.ajax({

            type: 'POST',
            url: $(form).attr('action'),
            data: formData,

        })

        x = true;

        if(x){

            alert("Mensagem enviada com sucesso aguarde nosso retorno.");

            formMessages.text("Mensagem enviada com sucesso!");
            formMessages.addClass("success");

        }else{

            alert("A Mensagem não foi enviada :c");

            formMessages.text("Mensagem não foi enviada :c").addClass("fail");
            formMessages.addClass("fail");

        }
        

        formMessages.removeClass("transparent");


        // TODO
        
        //Clean the form
        $('#InputName').val('');
        $('#InputEmail').val('');
        $('#InputPhone').val('');
        $('#FormTextarea').val('');


        setTimeout(function(){

            formMessages.addClass("transparent");

        }, 5000)

    });

});


