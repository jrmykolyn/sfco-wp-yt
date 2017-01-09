<?php
get_header();
?>
<section class="hero-wrap--has-overlay">
    <img src="http://lorempixel.com/1600/900/" alt="#" />
</section><!-- /.hero-wrap -->
<main class="main post"><!-- /// TEMP - Move `post` class to new element; rebuild template. -->
    <section class="layout-section">
        <div class="layout-section__inner">
        <?php
        while ( have_posts() ): the_post();
            get_template_part( 'includes/post/_post-header' );
            get_template_part( 'includes/post/_post-body' );
            get_template_part( 'includes/post/_post-footer' );
        endwhile;
        ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
</main>

<?php
get_footer();
?>