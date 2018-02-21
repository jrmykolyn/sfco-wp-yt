<?php
$header_logo_path = get_theme_mods()[ 'yt_header_logo' ] ? get_theme_mods()[ 'yt_header_logo' ] : get_template_directory_uri() . '/img/placeholder/logo.png';
?>
<header class="header">
    <div class="header__inner">

        <div class="logo-wrap">
            <a href="<?= get_site_url(); ?>" class="logo-wrap__link">
                <img src="<?= $header_logo_path; ?>" alt="" />
            </a><!-- /.logo-wrap__link -->
        </div><!-- /.logo-wrap -->

        <?php
        // Only inject mobile/desktop markup if 'primary' menu exists.
        if ( has_nav_menu( 'primary' ) ) {
        ?>
            <nav class="nav">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'header-menu',
                            'link_before' => '<span class="nav-link-text">',
                            'link_after' => '</span>'
                        )
                    );
                ?>
            </nav><!-- /.nav -->
            <button type="button" name="drawer-nav-toggle" class="drawer-nav-toggle js--drawer-nav-toggle">
                <span class="drawer-nav-toggle__elem"></span>
            </button>
            <?php get_template_part( 'includes/drawer-nav/_drawer-nav' ); ?>
        <?php
        }
        ?>

    </div><!-- /.header__inner -->
</header><!-- /.header -->
