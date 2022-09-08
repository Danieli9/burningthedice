<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="container error-404">
		<?php the_field( 'pnf_text', 'option' ); ?>
		<a href="<?= home_url(); ?>">Go to home page</a>
	</div>

</div><!-- #error-404-wrapper -->

<?php
get_footer();
