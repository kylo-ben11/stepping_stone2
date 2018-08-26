( function( $ ) {



    wp.customize( 'tx_email_text', function( value ) {
        value.bind( function( newval ) {
            $( '.emailText' ).html( newval );
        } );
    } );




} )( jQuery );