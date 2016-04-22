<div class="row" style="margin-left:-4px;">
  <form class="form-inline" role="search" method="get" id="searchform"
      class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
          <input class="form-control" placeholder="Search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
          <input class="btn btn-default" type="submit" id="searchsubmit"
              value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
  </form>
</div>
<br>