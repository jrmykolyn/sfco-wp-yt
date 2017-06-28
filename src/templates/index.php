<?php
get_header();
?>
<main class="main">
    <section class="layout-section">
        <div class="layout-section__inner">
            <?php
                get_template_part( 'includes/loop/_loop' );
            ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
    <section class="layout-section">
        <div class="layout-section__inner">
            <?php
                get_template_part( 'includes/pagination/_pagination' );
            ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
</main>
<?php
get_footer();
?>
