<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en">
<head>




<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, user-scalable=no" name="viewport"/>
<title>
<?php wp_title('|',1,'right'); ?>Purdue University <?php bloginfo('name'); ?>


</title>
<link href="favicon.ico" rel="shortcut icon"/><script async="true" src="https://www.purdue.edu/purdue/globals/js/modernizr-1.5.min.js" type="text/javascript">
</script>
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<script src="//www.purdue.edu/assets/globals/js/google_jquery_link_tracking.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
var _gaq = _gaq || [];

  // If you have your own Google Analytics account,
  // change the account number in the line below to your account
  // The number here is for the main Purdue analytics account
  _gaq.push(['_setAccount', 'UA-2785081-1']);
  _gaq.push(['_trackPageview']);

  // If you're tracking to your own account above and would also like track page views
  // to the main Purdue account, include the block of code below:

  // If your site is not on www.purdue.edu, change "yoursubdomain" to your actual subdomain.
  // For example, the admissions site would use 'admissions.purdue.edu' in the line below.
  // _gaq.push(['b._setDomainName', 'yoursubdomain.purdue.edu']);

  // Set the account on the secondary tracker to the main Purdue analytics account
  // _gaq.push(['b._setAccount', 'UA-2785081-1']);
  // _gaq.push(['b._trackPageview']);

  // Load the Google Analytics asynchronous API
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// ]]>
</script>
					<?php
					if(is_active_sidebar('head-code')){
					dynamic_sidebar('head-code');
					}
					?>

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
</head>
<body style="">
<div class="navbar navbar-inverse goldbar" role="navigation">
  <div class="container">
  <div class="navbar-header">
    <button class="navbar-toggle" data-target=".gold" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
  </div>
  <div class="collapse navbar-collapse gold">
    <ul class="nav navbar-nav navbar-right search">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-search fa-lg"></i></a>
        <ul class="dropdown-menu">
          <li>
            <form role="search">
              <div class="form-group">
                <div id="cse-search-form">
                  <div class="gsc-control-searchbox-only gsc-control-searchbox-only-en" dir="ltr">
                    <form class="gsc-search-box" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><input autocomplete="off" type="text" size="10" class=" gsc-input" name="search" title="search" id="gsc-i-id1" dir="ltr" spellcheck="false" style="outline: none; background-image: url(http://www.google.com/cse/intl/en/images/google_custom_search_watermark.gif); background-color: rgb(255, 255, 255); background-position: 0% 50%; background-repeat: no-repeat no-repeat;"><input type="hidden" name="bgresponse" id="bgresponse"></td><td class="gsc-search-button"><input type="button" value="Search" class="gsc-search-button" title="search"></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table><table cellspacing="0" cellpadding="0" class="gsc-branding"><tbody><tr><td class="gsc-branding-user-defined"></td><td class="gsc-branding-text"><div class="gsc-branding-text">powered by</div></td><td class="gsc-branding-img"><img src="https://www.google.com/uds/css/small-logo.png" class="gsc-branding-img"></td></tr></tbody></table></form>
                  </div>
                </div>
                <script src="https://www.google.com/jsapi" type="text/javascript"></script>
                <script type="text/javascript">// <![CDATA[
                google.load('search', '1', {language: 'en', style: google.loader.themes.MINIMALIST});
                google.setOnLoadCallback(function() {
                  var customSearchOptions = {};
                  var orderByOptions = {};
                  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                  customSearchOptions['enableOrderBy'] = true;
                  customSearchOptions['orderByOptions'] = orderByOptions;
                  var customSearchControl =   new google.search.CustomSearchControl('017690826183710227054:mjxnqnpskjk', customSearchOptions);
                  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                  var options = new google.search.DrawOptions();
                  options.enableSearchboxOnly('//www.purdue.edu/purdue/search.html', 'q');
                  customSearchControl.draw('cse-search-form', options);
                }, true);
                // ]]>
                </script><script src="https://www.google.com/uds/?file=search&amp;v=1&amp;hl=en&amp;style=%2F%2Fwww.google.com%2Fcse%2Fstyle%2Flook%2Fminimalist.css" type="text/javascript"></script><link href="https://www.google.com/uds/api/search/1.0/04703ddcb4427915c6a790783dcfaed7/default+en.css" type="text/css" rel="stylesheet"><link href="//www.google.com/cse/style/look/minimalist.css" type="text/css" rel="stylesheet"><script src="https://www.google.com/uds/api/search/1.0/04703ddcb4427915c6a790783dcfaed7/default+en.I.js" type="text/javascript"></script>
              </div>
            </form>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav information">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Find Info For <b class="caret"></b></a>
        <ul class="dropdown-menu"><p class="hide">Find Info For</p>
          <li><a href="//www.purdue.edu/purdue/current_students/">Current Students</a></li>
          <li><a href="//www.purdue.edu/purdue/prospective_students/">Prospective Students</a></li>
          <li><a href="//www.purdue.edu/purdue/alumni/">Alumni &amp; Friends</a></li>
          <li><a href="//www.purdue.edu/purdue/business/">Business with Purdue</a></li>
          <li><a href="//www.purdue.edu/purdue/careers/">Careers</a></li>
          <li><a href="//www.purdue.edu/purdue/research/">Research &amp; Partnerships</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav right quicklinks"><p class="hide">Quick Links</p>
      <li><a href="//www.purdue.edu/admissions/">Apply</a></li>
      <li><a href="//www.purdue.edu/newsroom/">News</a></li>
      <li><a href="http://www.purdueofficialstore.com/">Shop</a></li>
      <li><a href="//www.purdue.edu/visit/">Visit</a></li>
      <li><a href="//www.purdue.edu/giving/">Give</a></li>
      <li><a href="//www.purdue.edu/ea">Emergency</a></li>
    </ul>
  </div>
  <!--/.nav-collapse -->
  </div>
</div>
<div class="top">
<div class="container">
<div class="row">
<div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <a href="<?php echo site_url(); ?>"><img alt="Commercial Agriculture" src="<?php echo site_url(); ?>/wp-content/themes/child_theme/cca.png"/></a>
</div>
<div class="logo cme col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <a rel="nofollow" href="http://www.cmegroup.com/"><img alt="CME Group" src="<?php echo site_url(); ?>/wp-content/themes/child_theme/cme.png"/></a>
</div>
<!-- <div class="department col-lg-9 col-md-9 col-sm-9 col-xs-8"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></div> -->
</div>
</div>
</div>
<nav class="navbar navbar-inverse blackbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".black">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- Site Navigation Menu -->
      <?php /* Primary navigation */
        wp_nav_menu( array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'depth' => 3,
          'container' => div,
          'container_class' => 'collapse navbar-collapse black',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
      ?>
    <!--/.nav-collapse -->
    </div>
</nav>

