<section class="drawer-nav">
    <div class="drawer-nav__inner">
        <div class="drawer-nav-header">
            <button type="button" name="drawer-nav-toggle" class="drawer-nav-toggle js--drawer-nav-toggle">
                <span class="drawer-nav-toggle__elem"></span>
            </button>
        </div>
        <div class="drawer-nav-body">
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class' => 'drawer-menu',
					'link_before' => '<span class="nav-link-text">',
					'link_after' => '</span>'
				)
			);
		}
		?>
        </div>
        <div class="drawer-nav-footer">

        </div>
    </div>
</section>
