<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JazzClub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jazzclub' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			function getRandImage() {
				return (string) rand(1,15);
			}
			$HeaderImageStart = "wp-content/uploads/2020/05/h";
			$HeaderImageSelection = getRandImage();
			$HeaderImageEnd = ".jpg";
			$HeaderImageString = "".$HeaderImageStart.$HeaderImageSelection.$HeaderImageEnd;
			?>
			<!--<img class="custom-header-image" src="<?php echo $HeaderImageString;?>">-->
			<div class="header-row">
				<div class="header-column-25">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header-column-75">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jazzclub' ); ?></button>-->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		
		<nav id="site-navigation" class="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'mobile-menu',
				)
			);
			?>
		</nav><!-- #mobile-navigation -->
	</header><!-- #masthead -->
