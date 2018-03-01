<section class="footer-section">
	<?php
	// NOTE:
	// - Menus are read in dynamically via `$menu_location` var.
	// - `include( locate_template( ... ) )` method required in order to make vars. from outer scope available to template partials.
	$menu_location = 'primary';
	include( locate_template( 'includes/footer/_footer-menu.php', false, false ) );

	$menu_location = 'secondary';
	include( locate_template( 'includes/footer/_footer-menu.php', false, false ) );

	$menu_location = 'socials';
	include( locate_template( 'includes/footer/_footer-menu.php', false, false ) );
	?>
</section>
