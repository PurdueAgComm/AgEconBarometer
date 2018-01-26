<?php /* Template name: Category page */ ?>
<?php get_header(); ?>


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
    <h2><i class="fa fa-folder"></i> Category: <?php single_cat_title(); ?></h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div style="float:left; margin-right:5px;"><?php the_post_thumbnail('thumbnail'); ?></div>

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><em><?php the_time('l, F jS, Y'); ?></em></p>
        <hr>
      <?php the_excerpt('Read more...'); ?>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      <?php
      if ( function_exists('wp_bootstrap_pagination') )
        wp_bootstrap_pagination();
      ?>

    </div>

    <?php get_sidebar('sidenav'); ?>
    <?php get_sidebar('sidecontent'); ?>

  </div>
</div>

<?php get_footer(); ?>
