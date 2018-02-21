<?php
if ( has_nav_menu( $menu_location ) ) {
?>
    <div class="footer-col">
    <?php
    wp_nav_menu( array(
        'theme_location' => $menu_location,
        'container' => false,
        'menu_class' => 'footer-menu',
    ) );
    ?>
    </div>
<?php
}
?>
