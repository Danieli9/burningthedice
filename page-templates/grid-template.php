<?php
/**
 * Template Name: Tutorials Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('custom');
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>


<div class="wrapper" id="full-width-page-wrapper">

<div class="gh-header__tutorials">
    <div class="container px-20">
        <h1><?= get_the_title();?></h1>
        <?php the_field( 'excerpt' ); ?>
    </div>
</div>

<div class="gh-main__section">

    <div class="container px-20">

    <?php
    $blockCount = 0;
    $rowCount = 0;
    if ( have_rows( 'create_block' ) ) : 
        while ( have_rows( 'create_block' ) ) : the_row(); ?>
        <div class="single-block <?php if( $blockCount == 0 ) { ?> first<?php } ?>">
            <h2 class="headline mb-20"><?php the_sub_field( 'name_of_block_section' ); ?></h2>

            <div class="row gy-35 gx-20 justify-content-center">

                <?php if ( have_rows( 'single_item' ) ) : 
                        while ( have_rows( 'single_item' ) ) : the_row(); 
                        $single_item_image = get_sub_field( 'single_item_image' );
                        $single_item_url = get_sub_field( 'single_item_url' ); ?>

                        <div class="col-md-6<?php if( $rowCount <= 1 ) { ?> black-background<?php } ?>">
                            <?php if ( $single_item_url ) { ?>
                                <div class="image--holde">
                                    <a href="<?= $single_item_url['url']; ?>" target="<?= $single_item_url['target']; ?>">  <?php
                                        if ( $single_item_image ) { 
                                            echo wp_get_attachment_image( $single_item_image, 'full' );
                                        } ?>
                                    </a>
                                </div> <!-- END OF IMAGE HOLDER  -->

                            <?php } ?>
                        </div> <!-- END OF COL  -->

                <?php $rowCount++; endwhile; else : endif; ?>

            </div> <!-- END OF ROw  -->

        </div> <!-- END OF SINGLE BLOCK  -->

    <?php $blockCount++; endwhile; else : endif;?>

    </div>
</div>


</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
