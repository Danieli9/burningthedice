<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-lg bg-transparent" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="container-fluid position-relative px-20 mh-55px">

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>

			<?php
		} else {
			the_custom_logo();
		}
		?>
		<!-- end custom logo -->

		<button class="navbar-toggler ms-auto position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div> 
		</button>

		<div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="navbarNavOffcanvas">

			<div class="offcanvas-header">
				<button type="button" class="btn-close btn-close-gh btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div><!-- .offcancas-header -->

			<!-- The WordPress Menu goes here -->
			<div class="offcanvas-body">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
				<div class="right-nav">
					<ul>
						
						<?php if ( have_rows( 'right_menu', 'option' ) ) : ?>
							<?php while ( have_rows( 'right_menu', 'option' ) ) : the_row(); ?>
								<?php $single_link = get_sub_field( 'single_link' ); ?>
								<?php if ( $single_link ) { ?>
									<li> <a href="<?php echo $single_link['url']; ?>" target="<?php echo $single_link['target']; ?>"><?php echo $single_link['title']; ?></a></li>
								<?php } ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
						
					</ul>
				</div>
			</div>
			
		</div><!-- .offcanvas -->

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->



