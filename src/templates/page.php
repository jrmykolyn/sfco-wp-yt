<?php
get_header();

if ( have_posts() ):
    while ( have_posts() ): the_post();
?>
<main class="main">
    <section class="layout-section">
        <div class="layout-section__inner">
        <?php
        get_template_part( 'includes/page/_page-header' );
        get_template_part( 'includes/page/_page-body' );
        ?>
        </div><!-- /.layout-section__inner--narrow -->
    </section><!-- /.layout-section -->
</main>
<?php
    endwhile;
endif;
get_footer();
?>
