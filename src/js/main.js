$( document ).ready( function() {
    /* -------------------------------------------------- */
    /* DECLARE VARS */
    /* -------------------------------------------------- */
    var body = $( 'body' );
    var toggle = $( '.js--drawer-nav-toggle' );
    var btn_close = $( '.js--close' );


    /* -------------------------------------------------- */
    /* EVENTS */
    /* -------------------------------------------------- */
    if ( btn_close ) {
        btn_close.on( 'click', function( event ) {
            var target_class = $( this ).data( 'close-target' );
            var target_elem = $( this ).closest( '.' + target_class );

            target_elem.slideUp( 200 );;
        } );
    }

    if ( toggle ) {
        toggle.on( 'click', function( event ) {
            body.toggleClass( 'drawer-nav-active' );
        } );
    }
} );