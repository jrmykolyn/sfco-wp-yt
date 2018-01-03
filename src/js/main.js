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
    var drawerNavElem = $( '.js--drawer-nav' );
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
            // Update classes.
            body.toggleClass( 'drawer-nav-active' );

            var isActive = body.hasClass( 'drawer-nav-active' );
            var tabindexVal = isActive ? 0 : -1;

            // Update elem. `tabindex`.
            drawerNavElem.find( '[tabindex]' ).each( function( i, el ) {
                $( el ).attr( 'tabindex', tabindexVal );
            } );

            // Set focus.
            if ( isActive ) {
                drawerNavElem.find( toggle ).focus();
            } else {
                toggle.eq( 0 ).focus();
            }
        } );
    }

    if ( fade_in ) {
        fade_in.each( function( i, el ) {
            $( el ).addClass( classToString( MODIFIER_CLASSES[ 'faded-in' ] ) );
        } );
    }
} );
