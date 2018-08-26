( function( $ ) {



    wp.customize( 'tx_tagline_text', function( value ) {
        value.bind( function( newval ) {
            $( '#tagline' ).html( newval );
        } );
    } );




} )( jQuery );