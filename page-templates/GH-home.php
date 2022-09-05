<?php
/**
 * Template Name: GH Home
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

<div class="gh-header__home">
    <div class="container-fluid px-20 container-header__home">
        <div class="row g-0">
          <div class="col-lg-7 video-container order-2 order-lg-1"> 
            <iframe src="<?php the_field( 'youtube_url_' ); ?> " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-5 header-text__holder order-1 order-lg-2">
            <?php the_field( 'right_header_text' ); ?>
            <?php $home_button = get_field( 'home_button' ); ?>
            <?php if ( $home_button ) { ?>
              <a href="<?= $home_button['url']; ?>" target="<?= $home_button['target']; ?>"><?= $home_button['title']; ?></a>
            <?php } ?>
          </div>
        </div>
    </div>
</div>

<div class="gh--text__place">
  <div class="container px-20 px-lg-0">
    <div class="gh--text__holder">
      <?php the_field( 'home_first_text_quote_' ); ?>
    </div>
  </div>
</div>

<div class="gh--table">
    <div class="container px-20 px-lg-0">
      <div class="casionos--container home-page">
        <h3><?php the_field( 'table_title_for_homepage', 'option' ); ?></h3>
        <?php if ( have_rows( 'tables', 'option' ) ) : ?>
        <?php $count = 0; ?>
        <?php while ( have_rows( 'tables', 'option' ) ) : the_row(); ?>
        <div class="card <?php if (!$count) { ?>c-shadow<?php } ?>">
          <div class="row g-0">
            <div class="col-lg-4 align-self-center">
              <div class="single--casino">
                <span><?php the_sub_field( 'no' ); ?></span>
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) { ?>
                  <img class="img-fluid card-img" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
                <?php } ?>
                <div class="casino--review">
                  <p><?php the_sub_field( 'name' ); ?></p>
                  <ul class="star-<?php the_sub_field( 'stars' ); ?>">
                    <li><svg viewBox="0 0 24 24"><path d="M13.73 3.51014L15.49 7.03014C15.73 7.52014 16.37 7.99014 16.91 8.08014L20.1 8.61014C22.14 8.95014 22.62 10.4301 21.15 11.8901L18.67 14.3701C18.25 14.7901 18.02 15.6001 18.15 16.1801L18.86 19.2501C19.42 21.6801 18.13 22.6201 15.98 21.3501L12.99 19.5801C12.45 19.2601 11.56 19.2601 11.01 19.5801L8.02 21.3501C5.88 22.6201 4.58 21.6701 5.14 19.2501L5.85 16.1801C5.98 15.6001 5.75 14.7901 5.33 14.3701L2.85 11.8901C1.39 10.4301 1.86 8.95014 3.9 8.61014L7.09 8.08014C7.62 7.99014 8.26 7.52014 8.5 7.03014L10.26 3.51014C11.22 1.60014 12.78 1.60014 13.73 3.51014Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></li>
                    <li><svg viewBox="0 0 24 24"><path d="M13.73 3.51014L15.49 7.03014C15.73 7.52014 16.37 7.99014 16.91 8.08014L20.1 8.61014C22.14 8.95014 22.62 10.4301 21.15 11.8901L18.67 14.3701C18.25 14.7901 18.02 15.6001 18.15 16.1801L18.86 19.2501C19.42 21.6801 18.13 22.6201 15.98 21.3501L12.99 19.5801C12.45 19.2601 11.56 19.2601 11.01 19.5801L8.02 21.3501C5.88 22.6201 4.58 21.6701 5.14 19.2501L5.85 16.1801C5.98 15.6001 5.75 14.7901 5.33 14.3701L2.85 11.8901C1.39 10.4301 1.86 8.95014 3.9 8.61014L7.09 8.08014C7.62 7.99014 8.26 7.52014 8.5 7.03014L10.26 3.51014C11.22 1.60014 12.78 1.60014 13.73 3.51014Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></li>
                    <li><svg viewBox="0 0 24 24"><path d="M13.73 3.51014L15.49 7.03014C15.73 7.52014 16.37 7.99014 16.91 8.08014L20.1 8.61014C22.14 8.95014 22.62 10.4301 21.15 11.8901L18.67 14.3701C18.25 14.7901 18.02 15.6001 18.15 16.1801L18.86 19.2501C19.42 21.6801 18.13 22.6201 15.98 21.3501L12.99 19.5801C12.45 19.2601 11.56 19.2601 11.01 19.5801L8.02 21.3501C5.88 22.6201 4.58 21.6701 5.14 19.2501L5.85 16.1801C5.98 15.6001 5.75 14.7901 5.33 14.3701L2.85 11.8901C1.39 10.4301 1.86 8.95014 3.9 8.61014L7.09 8.08014C7.62 7.99014 8.26 7.52014 8.5 7.03014L10.26 3.51014C11.22 1.60014 12.78 1.60014 13.73 3.51014Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></li>
                    <li><svg viewBox="0 0 24 24"><path d="M13.73 3.51014L15.49 7.03014C15.73 7.52014 16.37 7.99014 16.91 8.08014L20.1 8.61014C22.14 8.95014 22.62 10.4301 21.15 11.8901L18.67 14.3701C18.25 14.7901 18.02 15.6001 18.15 16.1801L18.86 19.2501C19.42 21.6801 18.13 22.6201 15.98 21.3501L12.99 19.5801C12.45 19.2601 11.56 19.2601 11.01 19.5801L8.02 21.3501C5.88 22.6201 4.58 21.6701 5.14 19.2501L5.85 16.1801C5.98 15.6001 5.75 14.7901 5.33 14.3701L2.85 11.8901C1.39 10.4301 1.86 8.95014 3.9 8.61014L7.09 8.08014C7.62 7.99014 8.26 7.52014 8.5 7.03014L10.26 3.51014C11.22 1.60014 12.78 1.60014 13.73 3.51014Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></li>
                    <li><svg viewBox="0 0 24 24"><path d="M13.73 3.51014L15.49 7.03014C15.73 7.52014 16.37 7.99014 16.91 8.08014L20.1 8.61014C22.14 8.95014 22.62 10.4301 21.15 11.8901L18.67 14.3701C18.25 14.7901 18.02 15.6001 18.15 16.1801L18.86 19.2501C19.42 21.6801 18.13 22.6201 15.98 21.3501L12.99 19.5801C12.45 19.2601 11.56 19.2601 11.01 19.5801L8.02 21.3501C5.88 22.6201 4.58 21.6701 5.14 19.2501L5.85 16.1801C5.98 15.6001 5.75 14.7901 5.33 14.3701L2.85 11.8901C1.39 10.4301 1.86 8.95014 3.9 8.61014L7.09 8.08014C7.62 7.99014 8.26 7.52014 8.5 7.03014L10.26 3.51014C11.22 1.60014 12.78 1.60014 13.73 3.51014Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card-body p-20">
                <h5 class="card-title"><?php the_sub_field( 'bold_text' ); ?></h5>
                <p class="card-text"><?php the_sub_field( 'description' ); ?></p>
                <div class="btn--holder">
                <?php $primary_btn = get_sub_field( 'primary_btn' ); ?>
                <?php if ( $primary_btn ) { ?>
                  <a class="btn--primary" href="<?= $primary_btn['url']; ?>" target="<?= $primary_btn['target']; ?>"><?= $primary_btn['title']; ?> <svg viewBox="0 0 174.09 173.66"><path style="fill: #fafbfc;" d="M80.68,173.64q-24.69,0-49.39,0C14,173.61.44,161.15.26,144Q-.26,93.3.26,42.64c.17-17.5,13.92-30,32.41-30.36,9.43-.19,18.86-.11,28.29,0,8.63.09,14.18,5.21,14.24,12.89.06,8-5.5,13-14.52,13.08s-18.17,0-27.26,0c-6.09,0-7.77,1.56-7.78,7.5q-.08,47.33,0,94.65c0,6.2,2.15,8.27,8.5,8.28q46.55.09,93.1,0c7,0,8.66-1.78,8.68-8.91,0-9.09,0-18.18,0-27.26.06-8.12,5.36-13.67,12.89-13.67s13,5.52,12.84,13.64c-.18,12.48.29,25.08-1.29,37.4-1.79,13.93-14.62,23.67-28.77,23.72C114.63,173.69,97.65,173.64,80.68,173.64Z"/><path style="fill: #fafbfb;" d="M129.82,26.33H113.57c-8.32,0-14.45-5.51-14.58-13.09C98.85,5.17,104.32.07,113.33,0q23.42-.08,46.84,0C168.86.09,174,5.11,174,13.74q.12,23.94,0,47.87c0,8-4.73,13-12,13.22-8.5.23-13.41-4.28-13.91-12.93-.16-2.74,0-5.49,0-8.23V44.16c-2.74,2.67-4.77,4.57-6.73,6.55q-27.94,28.08-55.85,56.21c-3.54,3.56-7.51,6.14-12.73,5.23-4.88-.84-8.73-3.52-10.07-8.44-1.43-5.22-.66-10.09,3.52-14.19q23.31-22.89,46.44-46C118.08,38.2,123.41,32.78,129.82,26.33Z"/></svg></a>
                <?php } ?>
                <?php $secondary_btn = get_sub_field( 'secondary_btn' ); ?>
                <?php if ( $secondary_btn ) { ?>
                  <a class="btn--secondary" href="<?= $secondary_btn['url']; ?>" target="<?= $secondary_btn['target']; ?>"><?= $secondary_btn['title']; ?></a>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $count++; endwhile; ?>
        <?php else : ?>
          <?php // no rows found ?>
        <?php endif; ?>
      </div>
    </div>
</div>

<div class="gh--text__place">
  <div class="container px-20 px-lg-0">
    <div class="gh--text__holder">
      <?php the_field( 'home_secound _text_quote' ); ?>
    </div>
  </div>
</div>

<div class="gh--home__thumbs"> 
  <div class="container px-20 px-lg-0">
    <div class="single-block">
      <h4>CHECK OUT THIS PAGES</h4>
      <div class="row gy-20 gx-20 justify-content-center">
          <?php if ( have_rows( 'we_recommended' ) ) : while ( have_rows( 'we_recommended' ) ) : the_row(); ?>
            <div class="col-md-<?php the_sub_field( 'width' ); ?>">
              <div class="image--holde">
              <?php $image = get_sub_field( 'image' ); ?>
              <?php $link = get_sub_field( 'link' ); ?>
                <?php if ( $link ) { ?>
                  <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                <?php } ?>
                <?php if ( $image ) { ?>
                  <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                <?php } ?>
                  </a>
              </div> 
            </div>
          <?php endwhile; else : endif;?>
      </div> 
    </div>
  </div>
</div>

<div class="gh--bottom__arrow">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500"><g><path style="fill:#43A047;" d="M15.6,249.7C15.7,120.4,120.9,15.4,250.2,15.5c129.4,0.1,234.3,105.2,234.2,234.6 c-0.1,129.3-105.3,234.4-234.6,234.3C120.5,484.3,15.5,379.1,15.6,249.7z M250.1,382.8c41.5-39.7,82.8-79.2,124-118.7 c-0.2-0.4-0.4-0.7-0.6-1.1c-27.6,0-55.2,0-83.3,0c0-48.8,0-97.2,0-145.7c-26.9,0-53.4,0-80.3,0c0,48.6,0,97,0,146.1 c-28.1,0-55.8,0-84.6,0C167.3,303.6,208.4,343,250.1,382.8z"/></g></svg>
</div>


<div class="gh--singup">
  <div class="container px-20 px-lg-0">
    <div class="bg-gh">
      <div class="holder--img">
        <?php $image = get_field( 'image', 'option' ); ?>
        <?php if ( $image ) { ?>
          <img class="img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
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
              <button type="submit" class="btn-gh" href="<?= $ff_button['url']; ?>" target="<?= $ff_button['target']; ?>"><?= $ff_button['title']; ?></button>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
