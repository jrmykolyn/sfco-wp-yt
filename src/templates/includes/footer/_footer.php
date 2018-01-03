<footer class="footer">
    <div class="footer__inner">
        <?php
        if ( get_theme_mods()[ 'yt_footer_msg_text' ] ) {
        ?>
        <section class="footer-section">
            <h2><?= get_theme_mods()[ 'yt_footer_msg_title' ]?></h2>
            <p><?= get_theme_mods()[ 'yt_footer_msg_text' ]?></p>
        </section>
        <?php } ?>
        <section class="footer-section">
            <?php
            /// TEMP
            for ( $i = 0; $i < 4; $i++ ):
            ?>
                <div class="footer-col">
                    <h3>Footer Subtitle</h3>
            <?php if ( $i % 2 == 0 ): ?>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
            <?php else: ?>
                    <ul>
                        <li><a href="#">Link Test</a></li>
                        <li><a href="#">Link Test</a></li>
                        <li><a href="#">Link Test</a></li>
                        <li><a href="#">Link Test</a></li>
                    </ul>
            <?php endif; ?>
                </div>
            <?php
            endfor;
            ?>
        </section>
        <?php
        if ( get_theme_mods()[ 'yt_footer_attribution_text' ] ) {
        ?>
        <section class="footer-section--bottom">
                <p><?= get_theme_mods()[ 'yt_footer_attribution_text' ]; ?></p>
        </section>
        <?php
        }
        ?>
    </div>
</footer><!-- /.footer -->
