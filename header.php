<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything through the intro.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42283595-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42283595-2');
</script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Tyler Savin - Designer - Seattle, WA">
<meta name="author" content="Tyler Savin">
<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/themes/ts2017/assets/ico/favicon.png">
<title>Tyler Savin - Designer</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/css/reset.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>

<header>
    <div class="prenav">
        <div class="container prenav-container">
            <div class="row">
            <div class="col-xs-6 col-sm-9"><a href="<?php echo home_url(); ?>"><span class="header-name">Tyler Savin</span></a></div>
            <div class="col-xs-6 col-sm-3">
                <ul id="prenav-links">
                    <li><a href="https://github.com/OlyTsav"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://twitter.com/OlyTsav"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/tyler-savin-2a1a5044/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="search-form"><?php get_search_form(); ?></div>
    </div>
<nav id="main-nav">
<div class="container">
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9">
        <nav class="navbar"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
        </div>
    </div>
</div>
</nav>
</header>

<main>