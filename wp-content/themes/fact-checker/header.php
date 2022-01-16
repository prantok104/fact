<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package factChecker
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
	<!-- Header area start -->
	<header class="fact-header-area-start">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="fact-header-main-context">
						<div class="fact-logo-area-start">
							<?php the_custom_logo( ); ?>
						</div>
						<div class="fact-main-menu-area">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
							?>
						</div>
						<div class="fact-header-right">
							<ul class="fact-right-menu">
								<li><a href="#"><i class="fal fa-heart"></i></a></li>
								<li><a href="javascript:void(0)" class="search-form-open"><i class="fal fa-search"></i></a></li>
								<li><a href="#">English</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header area end -->

	<!-- Search area start -->
	<div class="fact-search-area-start">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="fact-search-context">
						<form action="<?php echo home_url( '/' ); ?>" method="GET" class="fact-search-form">
							<div class="fact-input-group">
								<button type="submit" class="fact-search-btn"><i class="fal fa-search"></i></button>
								<input type="search" id="s" name="s" class="form-control" placeholder="Type here">
							</div>
							<span class="fact-search-close"><i class="fal fa-times"></i></span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Search area end -->






<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fact-checker' ); ?></a>
