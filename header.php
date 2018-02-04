<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything through the intro.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/css/reset.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/ts2017/style.css" rel="stylesheet">
<script src="https://use.typekit.net/dyd0jmb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>
<body>

<header>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-3">
        <span class="header-name">Tyler Savin</span>
        <span class="header-social">
            <ul>
                <li><a href="https://github.com/OlyTsav"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/OlyTsav"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/tyler-savin-2a1a5044/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </span>
        </div>
        <div class="col-xs-6 col-sm-9">
        <nav class="navbar"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
        </div>
    </div>
</div>
</header>

<main>