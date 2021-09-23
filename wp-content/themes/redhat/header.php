<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redhat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="./css/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

      <header class="header">
        <div class="container">
          <div class="header__inner">
            <div class="header__logo"><img src="<?php the_field('header_logo', 'options');?>" alt="RedHat"></div>
            <div class="header__desc"><?php the_field('header_desc', 'options');?></div><a class="header__phone-mobile" href="tel:+77076225781"></a>
            <div class="header__burger"></div>
            <div class="header__sidebar">
              <div class="header__sidebar-close"></div><a class="header__phone" href="tel:+77076225781"><span class="header__phone-icon"></span><span class="header__phone-number"><?php the_field('header_phone-number', 'options');?></span></a><a class="btn btn_light header__btn" href="#"><span><?php the_field('header_btn', 'options');?></span></a>
            </div>
          </div>
        </div>
      </header>