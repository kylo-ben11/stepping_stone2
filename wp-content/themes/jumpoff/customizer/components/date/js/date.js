( function( $ ) {



    wp.customize( 'tx_date_text', function( value ) {
        value.bind( function( newval ) {
            $( '.eventDate__date' ).html( newval );
        } );
    } );




} )( jQuery );