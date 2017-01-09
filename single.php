<?php
get_header();
?>
<section class="hero-wrap">

</section><!-- /.hero-wrap -->
<main class="main">
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