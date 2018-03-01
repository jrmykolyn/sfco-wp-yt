/* eslint-env jquery */

$( document ).ready( function() {
	/* -------------------------------------------------- */
	/* DECLARE VARS */
	/* -------------------------------------------------- */
	var MODIFIER_CLASSES = {
		'fade-in': '.fade-in',
		'faded-in': '.faded-in'
	};

	// Elems.
	var body = $( 'body' );
	var toggle = $( '.js--drawer-nav-toggle' );
	var drawerNavElem = $( '.js--drawer-nav' );
	var btnCloseElem = $( '.js--close' );
	var fadeInElems = $ ( MODIFIER_CLASSES[ 'fade-in' ] );

	// Data
	var windowWidthPrev = null;

	/* -------------------------------------------------- */
	/* DECLARE FUNCTIONS */
	/* -------------------------------------------------- */
	function classToString( className ) {
		if ( className.substr( 0, 1 ) === '.' ) {
			return className.substr( 1 );
		}

		return className;
	}

	function toggleDrawerNav() {
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
		// Register 'click' handler.
		toggle.on( 'click', toggleDrawerNav );

		// Handle TAB/SHIT + TAB
		window.addEventListener( 'keydown', function( e ) {
			if ( body.hasClass( 'drawer-nav-active' ) ) {
				var elems = drawerNavElem.find( 'button, a' );

				// If the user hit SHIFT + TAB or TAB when on first/last focusable elem:
				// - Suppress TAB.
				// - Toggle drawer nav.
				if ( e.key.toLowerCase() === 'tab' ) {
					if (
						e.shiftKey && document.activeElement === elems.get( 0 ) ||
						!e.shiftKey & document.activeElement === elems.get( -1 )
					) {
						e.preventDefault();
						toggleDrawerNav();
					}
				}
			}
		} );

		// Handle resize.
		window.addEventListener( 'resize', function() {
			if ( window.outerWidth > windowWidthPrev ) {
				// When we cross the 768px threshold, close the drawer nav. if required.
				if ( window.outerWidth >= 768 && body.hasClass( 'drawer-nav-active' ) ) {
					toggleDrawerNav();
				}
			}

			// Update window width.
			windowWidthPrev = window.outerWidth;
		} );
	}

	if ( fadeInElems ) {
		fadeInElems.each( function( i, el ) {
			$( el ).addClass( classToString( MODIFIER_CLASSES[ 'faded-in' ] ) );
		} );
	}
} );
