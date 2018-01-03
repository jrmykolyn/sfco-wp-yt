<?php
if ( get_theme_mods()[ 'yt_preheader_show' ] ) {
?>
<section class="preheader">
    <div class="preheader__inner">
        <p class="preheader-copy">
            <?= get_theme_mods()[ 'yt_preheader_msg' ]; ?>
        </p>
    </div>
    <button type="button" name="button" class="preheader__cta js--close" data-close-target="preheader"></button>
</section><!-- /.preheader -->
<?php
}
?>
