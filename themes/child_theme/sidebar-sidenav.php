<div class="sidenav col-lg-3 col-md-3 col-sm-3">

  <?php
    // get current post/page
    $custom_fields = get_post_custom();
    // set variable
    if(isset($custom_fields["nav_parent"])) {
      $nav_parent = $custom_fields['nav_parent'];
      // is an array, so $portfolioURL[0] is the output
    }

    if($nav_parent[0] == "about") {
      wp_nav_menu( array(
          'menu' => 'About Secondary Menu'
      ));
    } else if($nav_parent[0] == "research") {
      wp_nav_menu( array(
          'menu' => 'Research Secondary Menu'
      ));
    } else if($nav_parent[0] == "education") {
      wp_nav_menu( array(
          'menu' => 'Education Secondary Menu'
      ));
    } else if($nav_parent[0] == "impact") {
      wp_nav_menu( array(
          'menu' => 'Impact Secondary Menu'
      ));
    } else if($nav_parent[0] == "support") {
      wp_nav_menu( array(
          'menu' => 'Support Secondary Menu'
      ));
    } else if($nav_parent[0] == "news") {
      wp_nav_menu( array(
          'menu' => 'News Secondary Menu'
      ));
    }
  ?>

  <br>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar Navigation') ) : ?>
	<?php endif; ?>

</div>

