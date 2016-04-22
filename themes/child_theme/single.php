<?php
/* Template for displaying all single posts */
get_header(); ?>
<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div id="breadcrumbs">
          <?php the_breadcrumb(); ?>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="rightnav col-lg-2 col-md-2 col-sm-2 right">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar Navigation') ) : ?>
      <?php endif; ?>
    </div>
    <div class="maincontent col-lg-7 col-md-7 col-sm-7 right">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><i class="fa fa-folder" title="category"> </i> <?php the_category(' '); ?> | <em><?php the_time('l, F jS, Y'); ?></em></p>
        <div class="banner">
          <?php
            the_post_thumbnail( 'large');
            $caption = get_post(get_post_thumbnail_id())->post_excerpt;
              if(!empty($caption)) {
                echo "<p class='caption'>" . $caption . "</p>";
              }
          ?>
        </div>
          <?php the_content(); ?>
          <!-- <p><i class="fa fa-tags"></i> <?php the_tags(''); ?></p> -->

        <?php comments_template(); ?>
        <!-- <nav id="nav-single">
          <h3 class="assistive-text"><?php _e( 'Read more', 'purduetwentyfourteen' ); ?></h3>
          <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav"><i class="fa fa-arrow-circle-left"></i></span> %title', 'purduetwentyfourteen' ) ); ?></span><br /><br />
          <span class="nav-next"><?php next_post_link( '%link', __( '%title <span class="meta-nav"><i class="fa fa-arrow-circle-right"></i></span>', 'purduetwentyfourteen' ) ); ?></span>
        </nav> -->
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
    <?php get_sidebar('sidenav'); ?>
    <?php get_sidebar('sidecontent'); ?>
  </div>
</div>
<?php get_footer(); ?>