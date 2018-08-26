( function( $ ) {


    //EMAIL
    wp.customize( 'tx_email_text', function( value ) {
        value.bind( function( newval ) {
            $( '.emailText' ).html( newval );
        } );
    } );


    //PHONE
    wp.customize( 'tx_phone_text', function( value ) {
        value.bind( function( newval ) {
            $( '.phoneText' ).html( newval );
        } );
    } );


    //HOURS
    wp.customize( 'tx_hours_text', function( value ) {
        value.bind( function( newval ) {
            $( '.hoursText' ).html( newval );
        } );
    } );





    //MAP
    wp.customize( 'tx_map_text', function( value ) {
        value.bind( function( newval ) {
            $( '.mapBlock' ).html( newval );
        } );
    } );


    //STREET
    wp.customize( 'tx_street_text', function( value ) {
        value.bind( function( newval ) {
            $( '.iconList__street' ).html( newval );
        } );
    } );


    //CSZ
    wp.customize( 'tx_csz_text', function( value ) {
        value.bind( function( newval ) {
            $( '.iconList__csz' ).html( newval );
        } );
    } );




} )( jQuery );