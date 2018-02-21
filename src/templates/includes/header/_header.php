<header class="header">
    <div class="header__inner">
        <div class="logo-wrap">
            <a href="<?= get_site_url(); ?>" class="logo-wrap__link">
                <img src="<?= get_template_directory_uri() . '/img/placeholder/logo.png' ?>" alt="" />
            </a><!-- /.logo-wrap__link -->
        </div><!-- /.logo-wrap -->

        <nav class="nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_class' => 'header-menu',
                        'link_before' => '<span class="nav-link-text">',
                        'link_after' => '</span>'
                    )
                );
            }
            ?>
        </nav><!-- /.nav -->
        <button type="button" name="drawer-nav-toggle" class="drawer-nav-toggle js--drawer-nav-toggle">
            <span class="drawer-nav-toggle__elem"></span>
        </button>
        <? get_template_part( 'includes/drawer-nav/_drawer-nav' ); ?>
    </div><!-- /.header__inner -->
</header><!-- /.header -->
