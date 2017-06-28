<footer class="footer">
    <div class="footer__inner">
        <section class="footer-section">
            <h2>Footer Title</h2>
            <p>
                Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#">cupidatat non</a> proident, sunt in culpa qui officia <em>deserunt mollit anim</em> id est laborum.
            </p>
        </section>
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
        <section class="footer-section--bottom">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
        </section>
    </div>
</footer><!-- /.footer -->
