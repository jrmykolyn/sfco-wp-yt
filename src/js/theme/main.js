/* eslint-env jquery */

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
	var btnCloseElem = $( '.js--close' );
	var fadeInElems = $ ( MODIFIER_CLASSES[ 'fade-in' ] );

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
	if ( btnCloseElem ) {
		btnCloseElem.on( 'click', function() {
			var targetClass = $( this ).data( 'close-target' );
			var targetElem = $( this ).closest( '.' + targetClass );

			targetElem.slideUp( 200 );
		} );
	}

	if ( toggle ) {
		toggle.on( 'click', function() {
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

	if ( fadeInElems ) {
		fadeInElems.each( function( i, el ) {
			$( el ).addClass( classToString( MODIFIER_CLASSES[ 'faded-in' ] ) );
		} );
	}
} );
