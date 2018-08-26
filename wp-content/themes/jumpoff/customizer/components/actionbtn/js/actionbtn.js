( function( $ ) {



    wp.customize( 'tx_actionbtn', function( value ) {
        value.bind( function( newval ) {
            $( '.actionBtn' ).html( newval );
        } );
    } );




} )( jQuery );