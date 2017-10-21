<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="<?php bloginfo('name'); ?>"/>
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <title>
            <?php
            wp_title('-', true, 'right');
            bloginfo('name');
            ?>
        </title>
        <?php include 'google-analytics.php'; ?>
        <?php wp_head(); ?>
    </head>

    <body>
        <nav id="menu-principal" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                    if (has_nav_menu('main-menu')) {
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'depth' => 2,
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav main-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                        );
                    }
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </nav>