<?php
if ( have_posts() ):
    $index = 0;

    while ( have_posts() ): the_post();
        if ( $index < get_max_featured_posts() ):
            get_template_part( 'includes/post-preview/_post-preview--large' );
        else:
            get_template_part( 'includes/post-preview/_post-preview' );
        endif;

        $index++;
    endwhile;
else:
?>
<h2>Whoops! Looks like you don't have any posts.</h2>
<?php
endif;
 ?>
