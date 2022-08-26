<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">


		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
				}
				?>

			</main><!-- #main -->
			<div class="gh--singup">
			<div class="container px-20 px-lg-0">
				<div class="bg-gh">
				<div class="holder--img">
					<?php $image = get_field( 'image', 'option' ); ?>
					<?php if ( $image ) { ?>
						<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php } ?>
				</div>
				<div class="holder--text d-flex align-self-center p-40">
					<div class="singup--holder">
					<h4><?php the_field( 'title', 'option' ); ?></h4>
					<?php the_field( 'description', 'option' ); ?>
					<form>
						<div class="mb-3">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						</div>
						<?php $ff_button = get_field( 'ff_button', 'option' ); ?>
						<?php if ( $ff_button ) { ?>
							<button type="submit" class="btn-gh" href="<?php echo $ff_button['url']; ?>" target="<?php echo $ff_button['target']; ?>"><?php echo $ff_button['title']; ?></button>
						<?php } ?>
					</form>
					</div>
				</div>
				</div>
			</div>
			</div>

		</div><!-- .row -->


</div><!-- #single-wrapper -->

<?php
get_footer();
