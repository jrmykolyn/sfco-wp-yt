<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <title>YT Theme</title>
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700|Montserrat:400,700" rel="stylesheet">
        <!-- PROJECT STYLES -->
        <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/styles.css">
        <!-- PROJECT SCRIPTS -->
        <script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/js/main.min.js"></script>
    </head>
    <body>
    <?php
    get_template_part( 'includes/preheader/_preheader' );
    get_template_part( 'includes/header/_header' );
    ?>