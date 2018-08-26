( function( $ ) {



    wp.customize( 'tx_logo_upload', function( value ) {
        value.bind( function( newval ) {
            $( '#logoUpload' ).html( newval );
        } );
    } );




} )( jQuery );