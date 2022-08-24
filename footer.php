<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="gh--footer">
      <div class="container px-20 px-lg-0">
      <?php the_field( 'middle_text_in_footer', 'option' ); ?>
      </div>
      <div class="down--footer">
        <div class="down-text">&copy; <?php echo date("Y"); ?> <?php the_field( 'bottom_text_in_footer', 'option' ); ?></div>

        <div class="social">
          <?php if ( have_rows( 'social_media', 'option' ) ) : ?>
            <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
              <?php $icon = get_sub_field( 'icon' ); ?>
              <?php $link = get_sub_field( 'link' ); ?>
              <?php if ( $link ) { ?>
                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></a>
              <?php } ?>
            <?php endwhile; ?>
          <?php else : ?>
            <?php // no rows found ?>
          <?php endif; ?>
        </div>





      </div>
    </footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

