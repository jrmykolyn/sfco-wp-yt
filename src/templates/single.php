<?php
$thumb = get_the_post_thumbnail();

get_header();
while ( have_posts() ): the_post();
    if ( $thumb ):
        get_template_part( 'includes/post/_post-hero' );
    endif;
?>
<main class="main post"><!-- /// TEMP - Move `post` class to new element; rebuild template. -->
    <section class="layout-section">
        <div class="layout-section__inner">
        <?php
        get_template_part( 'includes/post/_post-header' );
        get_template_part( 'includes/post/_post-body' );
        get_template_part( 'includes/post/_post-footer' );
        ?>
        </div>
    </section>
</main>

<?php
endwhile;
get_footer();
?>
