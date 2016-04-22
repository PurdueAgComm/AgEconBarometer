<?php
/**
 *
 * Template Name: Home Banner Page
 *
**/

get_header(); ?>

<div class="introContainer rowContainer" id="introRow">
  <div class="shader"></div>
  <div class="container intro">
  <center>
    <img alt="Ag Economy Barometer - Purdue University in partnership with CME Group" style="margin-bottom: 125px;" src="<?php echo site_url(); ?>/wp-content/themes/child_theme/barometer.png" class="img-responsive">
  </center>
<!--     <div class="icon">
      <i class="fa fa-tachometer"></i>
    </div> -->
    <!--
    <h1>AG ECONOMY BAROMETER</h1>
    <div class="divider"></div>
    <div class="content">
    <p class="content-text">Purdue University &bull; CME Group</p>
    -->



    </div>
  </div>
</div>

<!-- <div class="proofPointContainer rowContainer">
  <div class="container">
    <div class="proofPoint row">
      <h1>Working together to move plant science discoveries from research to commercialization</h1>
    </div>
  </div>
</div> -->

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'page' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>

  <div class="featureNewsContainer rowContainer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title"><a href="<?php echo site_url(); ?>/category/report">Reports</a></h1>
            <div class="newsItemContent">
            <?php
              // we need to get the last three posts that are tagged as news that are published
              $args = array( 'numberposts' => '3', 'post_status' => 'publish', 'category' => '2');
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ) :
                // grab the featured image from the post
                $thumb_id = get_post_thumbnail_id($recent["ID"]);
                $featured_thumb_URL = wp_get_attachment_url($thumb_id);
                $blurb = $recent["post_content"];
                if (preg_match('/^.{1,260}\b/s', $blurb, $match))
                {
                    $blurb = $match[0];
                }
              ?>
              <div class="col-xs-12">
                <h3><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h3>
                <?php if(!empty($thumb_id)) : ?>
                  <img style="min-width: 250px;" src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
                <?php endif; ?>
                <br>
                <p><?php echo $blurb  . " [...]"; ?></p>
              </div>
            <?php endforeach; ?>
            <br style="clear: both;">
            <a href="#" class="btn btn-default btn-sm pull-right">View All Reports &raquo;</a>
            <br style="clear: both;">
          </div> <!-- /.newsItemContent -->
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title"><a href="news">News</a></h1>
          <div class="newsItemContent">
            <?php
              // we need to get the last three posts that are tagged as news that are published
              $args = array( 'numberposts' => '5', 'post_status' => 'publish', 'category' => '3');
              $recent_posts = wp_get_recent_posts( $args );
              $i = 0;
              foreach( $recent_posts as $recent ) :
                // grab the featured image from the post
                $thumb_id = get_post_thumbnail_id($recent["ID"]);
                $featured_thumb_URL = wp_get_attachment_url($thumb_id);
                $blurb = $recent["post_content"];
                if (preg_match('/^.{1,260}\b/s', $blurb, $match))
                {
                    $blurb = $match[0];
                }
                $link = get_post($recent["ID"])->external_link;
                //die("here:" . get_post(get_post_thumbnail_id($recent["ID"]))->external_link);
              ?>
              <!-- One News Story -->

              <div class="col-sm-12">
                <div class="news-padding-fix">
                  <li><a href="<?php echo $link ?>"><h4><?php echo $recent["post_title"]; ?></h4></a></li>
                </div>
              </div>
              <!-- End News Story -->
            <?php
            endforeach; ?>
            <br style="clear: both;">
            <a href="news" class="btn btn-default btn-sm pull-right">View All News &raquo;</a>
            <br style="clear: both;">
            </div> <!-- /.newsItemContent -->
          </div> <!-- /.newsItem -->

      </div>
    </div>
  </div>
</div>

<?php
//get_sidebar();
get_footer();


