<?php
/**
 * Header template
 *
 * @package YourThemeName
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="p-3 text-bg-dark">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

				<!-- Logo -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					class="d-flex align-items-center mb-2 mb-lg-0 me-4 text-white text-decoration-none">

					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<span class="fs-4 fw-bold">
							<?php bloginfo( 'name' ); ?>
						</span>
					<?php endif; ?>

				</a>

				<!-- Navigation -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0',
					'fallback_cb' => false,
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) );
				?>

				<!-- Search -->
				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="get"
					action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" name="s" class="form-control form-control-dark text-bg-dark"
						placeholder="Search..." aria-label="Search">
				</form>

				<!-- Buttons -->
				<div class="text-end">
					<?php if ( is_user_logged_in() ) : ?>
						<a href="<?php echo esc_url( admin_url() ); ?>" class="btn btn-outline-light me-2">
							Dashboard
						</a>
					<?php else : ?>
						<a href="<?php echo esc_url( wp_login_url() ); ?>" class="btn btn-outline-light me-2">
							Login
						</a>
						<a href="<?php echo esc_url( wp_registration_url() ); ?>" class="btn btn-warning">
							Sign up
						</a>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</header>
	<!-- Site Content -->
	<main id="site-content">