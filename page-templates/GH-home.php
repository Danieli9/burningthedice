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
                  <a class="btn--primary" href="<?= $primary_btn['url']; ?>" target="<?= $primary_btn['target']; ?>"><?= $primary_btn['title']; ?> <svg viewBox="0 0 24 24" fill="none"><path d="M12.9999 11.75C12.8099 11.75 12.6199 11.68 12.4699 11.53C12.1799 11.24 12.1799 10.76 12.4699 10.47L20.6699 2.27001C20.9599 1.98001 21.4399 1.98001 21.7299 2.27001C22.0199 2.56001 22.0199 3.04001 21.7299 3.33001L13.5299 11.53C13.3799 11.68 13.1899 11.75 12.9999 11.75Z"/><path d="M22.0002 7.55C21.5902 7.55 21.2502 7.21 21.2502 6.8V2.75H17.2002C16.7902 2.75 16.4502 2.41 16.4502 2C16.4502 1.59 16.7902 1.25 17.2002 1.25H22.0002C22.4102 1.25 22.7502 1.59 22.7502 2V6.8C22.7502 7.21 22.4102 7.55 22.0002 7.55Z"/><path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H11C11.41 1.25 11.75 1.59 11.75 2C11.75 2.41 11.41 2.75 11 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V13C21.25 12.59 21.59 12.25 22 12.25C22.41 12.25 22.75 12.59 22.75 13V15C22.75 20.43 20.43 22.75 15 22.75Z"/></svg></a>
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
