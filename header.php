<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabot Cruises<?php wp_title(); ?> </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/./slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/./slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?>/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header -->
        <header>
            <h1>Cabot<br><span>Cruises</span></h1>
            <img src="<?php echo get_template_directory_uri() ?>/images/newcabotCruisesLogo1x.png" srcset="<?php echo get_template_directory_uri() ?>/images/newcabotCruisesLogo1x.png 1x, <?php echo get_template_directory_uri() ?>/images/newcabotCruisesLogo2x.png 2x, <?php echo get_template_directory_uri() ?>/images/newcabotCruisesLogo3x.png 3x" alt="Cabot cruises logo">
            <a href="tel:555-555-5555">555-555-5555</a>
        </header>
        <!-- nav -->
        <nav class="clearfix">
            <button id="hamburgerBtn">&#9776;</button>
            <?php wp_nav_menu(array('menu_id' => 'primaryNav'));?>
            <form method="get" action="/WordPress/">
                <input type="search" placeholder="Search..." name="s">
                <button id="search" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </nav>
