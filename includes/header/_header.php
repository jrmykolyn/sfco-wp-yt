<header class="header">
    <div class="header__inner">
        <div class="logo-wrap">
            <a href="<?= get_site_url(); ?>" class="logo-wrap__link">
                <img src="http://placeholdit.imgix.net/~text?txtsize=24&txt=LOGO&w=150&h=50" alt="#" />
            </a><!-- /.logo-wrap__link -->
        </div><!-- /.logo-wrap -->
        
        <nav class="nav">
        <?php wp_nav_menu(
            array(
                'link_before' => '<span class="nav-link-text">',
                'link_after' => '</span>',
            )
        ); ?>
        </nav><!-- /.nav -->
    </div><!-- /.header__inner -->
</header><!-- /.header -->