
   <!-- LOGO - MAUVAISE PRATIQUE  -->
   
   <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <?php
        // Chemin du dossier d'uploads
        $upload_dir = wp_upload_dir();

        // Chemin complet de l'image du logo

        $logo_path = $upload_dir['baseurl'] . '/2024/04/Logo-planty.png';
        ?>
        
        <img src="<?php echo esc_url($logo_path); ?>" alt="Logo planty" width="201" height="19">
    </a>

<!-- Autre façon en dur pas du tout propre -->

<div class="logo">
  <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/css/img/logo.png' ) ?>" width="201" height="19" alt="<?php bloginfo( 'name' ); ?>">
</div>


 <!-- HEADER - BONNE PRATIQUE  -->

Je crée un fichier header-custom.php

	<header class="header-custom">
        <!-- Votre en-tête personnalisé -->
        <div class="logo">
        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
            <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
        <?php endif; ?>
        </div>
        <!-- Autres éléments d'en-tête personnalisés -->
    </header>


Je personnalise le fichier header.php

<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();
	//astra_header();
	// Charger le template personnalisé
	//include( get_stylesheet_directory() . '/header-custom.php' );
	get_template_part( 'header-custom' );
	?>

    
	
	<?php
	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>


.ast-builder-menu-1 .menu-item > .menu-link {
  color: var(--ast-global-color-3);
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 60px;
  padding-right: 60px;
}
.main-header-menu a:hover {
  font-size: 13px;
  font-weight: 700;
  line-height: 15px;
  color: #000000;
}
.main-header-menu .menu-link, .main-header-menu > a {
  text-decoration: none;
  padding: 0 1em;
  display: inline-block;
  transition: all .2s linear;
}
.main-header-menu a {
  font-size: 16px;
  font-weight: 400;
  line-height: 19px;
}
a:hover, a:focus {
  color: var(--ast-global-color-1);
}
a:hover {
  outline: 0;
}
a:focus, a:hover {
  color: #191970;
}
a, a:focus, a:hover, a:visited {
  text-decoration: none;
}
body * {
  font-family: 'Syne', 'Times New Roman', Times, serif;
}
a:where(:not(.wp-element-button)) {
  text-decoration: none;
}
a {
  color: var(--ast-global-color-3);
}
.secondary a *, .site-footer a *, .site-header a *, a {
  transition: all .2s linear;
}
a, a:focus {
  text-decoration: none;
}
a {
  color: #4169e1;
}
a {
  background-color: transparent;
}
*, ::after, ::before {
  box-sizing: inherit;
}