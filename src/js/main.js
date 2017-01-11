$( document ).ready( function() {
    /* -------------------------------------------------- */
    /* DECLARE VARS */
    /* -------------------------------------------------- */
    var body = $( 'body' );
    var toggle = $( '.js--drawer-nav-toggle' );


    /* -------------------------------------------------- */
    /* EVENTS */
    /* -------------------------------------------------- */
    if ( toggle ) {
        toggle.on( 'click', function( event ) {
            body.toggleClass( 'drawer-nav-active' );
        } );
    }
} );