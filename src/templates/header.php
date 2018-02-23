<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <title><?php the_title_attribute(); ?></title>
        <?php get_template_part( 'includes/head/_head' ); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php
    get_template_part( 'includes/preheader/_preheader' );
    get_template_part( 'includes/header/_header' );
    ?>
