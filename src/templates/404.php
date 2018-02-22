<?php
get_header();
?>
<main class="main">
    <section class="layout-section">
        <div class="layout-section__inner">
            <h1>Whoops, looks like we couldn't find what you're looking for!</h1>
            <h2>Why not check out one of these recent posts instead?</h2>
            <?php
            // Fetch posts.
            $posts = get_posts( array(
                'posts_per_page' => 3,
                'offset' => 0
            ) );

            if ( $posts ):
                foreach( $posts as $post ):
                    $link = get_permalink( $post->post_id );
                    echo "<h3><a href=\"$link\">";
                    echo $post->post_name;
                    echo "</a></h3>";
                endforeach;
            else:
                echo "<h3>";
                echo "Whoops! Looks like there aren't any recent posts to display!";
                echo "<h3>";
            endif;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
