<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="gh--header">
        <div class="container px-20 px-lg-0">
            <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
            <?php the_field( 'exerpt_for_posts' ); ?>
        </div>
    </div>

	<div class="gh--table">
        <div class="container px-20 px-lg-0">
          <div class="casionos--container post-template pt-0">
          <?php 
          $visibility_table_post_level = get_field( 'visibility_table_post_level' );
              if ($visibility_table_post_level) { 
              // post level casinos table
              if ( have_rows( 'tables_table_post_level' ) ) :
              $count = 0;
              while ( have_rows( 'tables_table_post_level' ) ) : the_row(); ?>
              <div class="card <?php if (!$count) { ?>c-shadow<?php } ?>">
                <div class="row g-0">
                  <div class="col-lg-4 align-self-center">
                    <div class="single--casino">
                      <span><?php the_sub_field( 'no_table_post_level' ); ?></span>
                      <?php $image_table_post_level = get_sub_field( 'image_table_post_level' ); ?>
                      <?php if ( $image_table_post_level ) { ?>
                        <img class="img-fluid card-img"  src="<?php echo $image_table_post_level['url']; ?>" alt="<?php echo $image_table_post_level['alt']; ?>" />
                      <?php } ?>

                      <div class="casino--review">
                        <p><?php the_sub_field( 'name_table_post_level' ); ?></p>
                        <ul class="star-<?php the_sub_field( 'stars_table_post_level' ); ?>">
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
                      <h5 class="card-title"><?php the_sub_field( 'bold_text_table_post_level' ); ?></h5>
                      <p class="card-text"><?php the_sub_field( 'description_table_post_level' ); ?></p>
                      <div class="btn--holder">
                      <?php $primary_btn_table_post_level = get_sub_field( 'primary_btn_table_post_level' ); ?>
                      <?php if ( $primary_btn_table_post_level ) { ?>
                        <a class="btn--primary <?php if (!$count) { ?>btn--shadow<?php } ?>" href="<?php echo $primary_btn_table_post_level['url']; ?>" target="<?php echo $primary_btn_table_post_level['target']; ?>"><?php echo $primary_btn_table_post_level['title']; ?> <svg viewBox="0 0 174.09 173.66"><path style="fill: #fafbfc;" d="M80.68,173.64q-24.69,0-49.39,0C14,173.61.44,161.15.26,144Q-.26,93.3.26,42.64c.17-17.5,13.92-30,32.41-30.36,9.43-.19,18.86-.11,28.29,0,8.63.09,14.18,5.21,14.24,12.89.06,8-5.5,13-14.52,13.08s-18.17,0-27.26,0c-6.09,0-7.77,1.56-7.78,7.5q-.08,47.33,0,94.65c0,6.2,2.15,8.27,8.5,8.28q46.55.09,93.1,0c7,0,8.66-1.78,8.68-8.91,0-9.09,0-18.18,0-27.26.06-8.12,5.36-13.67,12.89-13.67s13,5.52,12.84,13.64c-.18,12.48.29,25.08-1.29,37.4-1.79,13.93-14.62,23.67-28.77,23.72C114.63,173.69,97.65,173.64,80.68,173.64Z"/><path style="fill: #fafbfb;" d="M129.82,26.33H113.57c-8.32,0-14.45-5.51-14.58-13.09C98.85,5.17,104.32.07,113.33,0q23.42-.08,46.84,0C168.86.09,174,5.11,174,13.74q.12,23.94,0,47.87c0,8-4.73,13-12,13.22-8.5.23-13.41-4.28-13.91-12.93-.16-2.74,0-5.49,0-8.23V44.16c-2.74,2.67-4.77,4.57-6.73,6.55q-27.94,28.08-55.85,56.21c-3.54,3.56-7.51,6.14-12.73,5.23-4.88-.84-8.73-3.52-10.07-8.44-1.43-5.22-.66-10.09,3.52-14.19q23.31-22.89,46.44-46C118.08,38.2,123.41,32.78,129.82,26.33Z"/></svg></a>
                      <?php } ?>
                      <?php $secondary_btn_table_post_level = get_sub_field( 'secondary_btn_table_post_level' ); ?>
                      <?php if ( $secondary_btn_table_post_level ) { ?>
                        <a class="btn--secondary" href="<?php echo $secondary_btn_table_post_level['url']; ?>" target="<?php echo $secondary_btn_table_post_level['target']; ?>"><?php echo $secondary_btn_table_post_level['title']; ?></a>
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php $count++; endwhile; ?>
              <?php else :
              // silence is golden
              endif;
              // end of post level casinos table
            } else { 
              // global casinos table
              if ( have_rows( 'tables', 'option' ) ) : ?>
              <?php $count = 0; ?>
              <?php while ( have_rows( 'tables', 'option' ) ) : the_row(); ?>
              <div class="card <?php if (!$count) { ?>c-shadow<?php } ?>">
                <div class="row g-0">
                  <div class="col-lg-4 align-self-center">
                    <div class="single--casino">
                      <span><?php the_sub_field( 'no' ); ?></span>
                      <?php $image = get_sub_field( 'image' ); ?>
                      <?php if ( $image ) { ?>
                        <img class="img-fluid card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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
                        <a class="btn--primary <?php if (!$count) { ?>btn--shadow<?php } ?>" href="<?php echo $primary_btn['url']; ?>" target="<?php echo $primary_btn['target']; ?>"><?php echo $primary_btn['title']; ?> <svg viewBox="0 0 174.09 173.66"><path style="fill: #fafbfc;" d="M80.68,173.64q-24.69,0-49.39,0C14,173.61.44,161.15.26,144Q-.26,93.3.26,42.64c.17-17.5,13.92-30,32.41-30.36,9.43-.19,18.86-.11,28.29,0,8.63.09,14.18,5.21,14.24,12.89.06,8-5.5,13-14.52,13.08s-18.17,0-27.26,0c-6.09,0-7.77,1.56-7.78,7.5q-.08,47.33,0,94.65c0,6.2,2.15,8.27,8.5,8.28q46.55.09,93.1,0c7,0,8.66-1.78,8.68-8.91,0-9.09,0-18.18,0-27.26.06-8.12,5.36-13.67,12.89-13.67s13,5.52,12.84,13.64c-.18,12.48.29,25.08-1.29,37.4-1.79,13.93-14.62,23.67-28.77,23.72C114.63,173.69,97.65,173.64,80.68,173.64Z"/><path style="fill: #fafbfb;" d="M129.82,26.33H113.57c-8.32,0-14.45-5.51-14.58-13.09C98.85,5.17,104.32.07,113.33,0q23.42-.08,46.84,0C168.86.09,174,5.11,174,13.74q.12,23.94,0,47.87c0,8-4.73,13-12,13.22-8.5.23-13.41-4.28-13.91-12.93-.16-2.74,0-5.49,0-8.23V44.16c-2.74,2.67-4.77,4.57-6.73,6.55q-27.94,28.08-55.85,56.21c-3.54,3.56-7.51,6.14-12.73,5.23-4.88-.84-8.73-3.52-10.07-8.44-1.43-5.22-.66-10.09,3.52-14.19q23.31-22.89,46.44-46C118.08,38.2,123.41,32.78,129.82,26.33Z"/></svg></a>
                      <?php } ?>
                      <?php $secondary_btn = get_sub_field( 'secondary_btn' ); ?>
                      <?php if ( $secondary_btn ) { ?>
                        <a class="btn--secondary" href="<?php echo $secondary_btn['url']; ?>" target="<?php echo $secondary_btn['target']; ?>"><?php echo $secondary_btn['title']; ?></a>
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php $count++; endwhile; ?>
              <?php else :
              // silence is golden 
              endif;
              // end of global casinos table
            } ?>
          </div>
        </div>
    </div>

	<div class="entry-content" id="entry-content">

	  <div class="gh--content">
      <div class="container px-20 px-lg-0">
        <div class="feature-image">
          <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div>
        <div class="table--of__content">
            <ul>
              <?php if ( have_rows( 'table_of_content' ) ) : while ( have_rows( 'table_of_content' ) ) : the_row(); ?>
                  <li><a href="#<?php the_sub_field( 'toc_id' ); ?>" class="sliding-link"><?php the_sub_field( 'toc_title' ); ?></a></li>
              <?php endwhile; else : endif;?>
            </ul>
        </div>
        <?php
        the_content();
        ?>
      </div>
    </div>



	</div><!-- .entry-content -->

<div class="global--cta">
  <?php if ( have_rows( 'tables', 'option' ) ) : ?>
    <?php while ( have_rows( 'tables', 'option' ) ) : the_row(); ?>
      <?php $primary_btn = get_sub_field( 'primary_btn' ); ?>
      <?php if ( $primary_btn ) { ?>
        <a class="btn--global--cta" href="<?php echo $primary_btn['url']; ?>" target="<?php echo $primary_btn['target']; ?>"><?php echo $primary_btn['title']; ?> <svg viewBox="0 0 174.09 173.66"><path style="fill: #fafbfc;" d="M80.68,173.64q-24.69,0-49.39,0C14,173.61.44,161.15.26,144Q-.26,93.3.26,42.64c.17-17.5,13.92-30,32.41-30.36,9.43-.19,18.86-.11,28.29,0,8.63.09,14.18,5.21,14.24,12.89.06,8-5.5,13-14.52,13.08s-18.17,0-27.26,0c-6.09,0-7.77,1.56-7.78,7.5q-.08,47.33,0,94.65c0,6.2,2.15,8.27,8.5,8.28q46.55.09,93.1,0c7,0,8.66-1.78,8.68-8.91,0-9.09,0-18.18,0-27.26.06-8.12,5.36-13.67,12.89-13.67s13,5.52,12.84,13.64c-.18,12.48.29,25.08-1.29,37.4-1.79,13.93-14.62,23.67-28.77,23.72C114.63,173.69,97.65,173.64,80.68,173.64Z"/><path style="fill: #fafbfb;" d="M129.82,26.33H113.57c-8.32,0-14.45-5.51-14.58-13.09C98.85,5.17,104.32.07,113.33,0q23.42-.08,46.84,0C168.86.09,174,5.11,174,13.74q.12,23.94,0,47.87c0,8-4.73,13-12,13.22-8.5.23-13.41-4.28-13.91-12.93-.16-2.74,0-5.49,0-8.23V44.16c-2.74,2.67-4.77,4.57-6.73,6.55q-27.94,28.08-55.85,56.21c-3.54,3.56-7.51,6.14-12.73,5.23-4.88-.84-8.73-3.52-10.07-8.44-1.43-5.22-.66-10.09,3.52-14.19q23.31-22.89,46.44-46C118.08,38.2,123.41,32.78,129.82,26.33Z"/></svg></a>
      <?php } ?>
    <?php break;  ?>
    <?php endwhile; ?>
  <?php else : ?>
    <?php // no rows found ?>
  <?php endif; ?>	
</div>
</article><!-- #post-## -->

