$( document ).ready( function() {
    /* -------------------------------------------------- */
    /* DECLARE VARS */
    /* -------------------------------------------------- */
    var MODIFIER_CLASSES = {
        'fade-in': '.fade-in',
        'faded-in': '.faded-in'
    };

    var body = $( 'body' );
    var toggle = $( '.js--drawer-nav-toggle' );
    var btn_close = $( '.js--close' );
    var fade_in = $ (MODIFIER_CLASSES[ 'fade-in' ] );


    /* -------------------------------------------------- */
    /* DECLARE FUNCTIONS */
    /* -------------------------------------------------- */
     function classToString( className ) {
         if ( className.substr( 0, 1 ) === '.' ) {
             return className.substr( 1 );
         }

          return className;
     }


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

    if ( fade_in ) {
        fade_in.each( function( i, el ) {
            $( el ).addClass( classToString( MODIFIER_CLASSES[ 'faded-in' ] ) );
        } );
    }
} );