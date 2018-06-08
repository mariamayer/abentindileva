<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abentindileva
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600" rel="stylesheet" type="text/css" >

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header id="masthead" class="site-header ">
    <nav class="navbar navbar-default fixed-top pt-3">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="h1logo">ESTUDIO</div>
                <div class="h2logo font-weight-light">GABY ABENTIN <br> LARA DI LEVA</div>
            </div>
          <?php
          wp_nav_menu( array(
              'menu_class' => 'nav navbar-right menu',
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
          ) );
          ?>
        </div>
    </nav>
</header>
