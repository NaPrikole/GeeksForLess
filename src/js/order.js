$(document).ready(function(){
    $( "#mail_to" ).submit(function( event ) {
        event.preventDefault();

        var $form = $( this ),
            name = $form.find( "input[name='userName']" ).val(),
            address = $form.find( "input[name='userAddress']" ).val(),
            count = $form.find( "input[name='count']" ).val(),
            bookId = $form.find( "input[name='bookId']" ).val(),
            bookTitle = $form.find( "input[name='bookTitle']" ).val(),
            bookPrice = $form.find( "input[name='bookPrice']" ).val(),
            url = $form.attr( "action" );

        console.log(name);

        var posting = $.post( url, { name: name, address: address, quantity: count, bookId: bookId, bookTitle: bookTitle, bookPrice: bookPrice } );

        posting.done(function( data ) {
            $( ".messages" ).html( data );
            $('#mail_to')[0].reset();
        });
    });
});