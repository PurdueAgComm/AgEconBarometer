<?php
/**
 *
 * Template Name: News Home Banner Page
 *
**/

get_header(); ?>

<div class="container">
  <div class="row" style="padding: 15px 0; border-bottom: 1px solid #dadada;">
    <div class="col-sm-3 sidenav">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar Content') ) : ?>
      <?php endif; ?>
    </div>
    <div class="col-sm-9">
    <h1>News</h1>
    <?php
    // set the "paged" parameter (use 'page' if the query is on a static front page)
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // the query
    $the_query = new WP_Query( 'cat=3&paged=' . $paged );
    if ( $the_query->have_posts() ) :
    // the loop
    while ($the_query->have_posts()) :
      $the_query->the_post();
      $link = get_post(get_post_thumbnail_id())->external_link;
    ?>
        <div class="col-sm-12">
          <li><strong><a href="<?php echo $link; ?>"><?php the_title(); ?></a></strong>
          <br><small style="margin-left: 15px;" class="text-muted"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></small></li>
        </div>
        <br style="clear:both;"><br style="clear:both;">

    <?php endwhile;
    if(function_exists('wp_bootstrap_pagination')) {
      wp_bootstrap_pagination();
    }
    // clean up after the query and pagination
    wp_reset_postdata();
    ?>
    <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>
  </div> <!-- /.row -->
</div> <!-- /.container -->
<?php
//get_sidebar();
get_footer();


