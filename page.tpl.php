<?php
// $Id: page.tpl.php,v 1.2.2.1 2009/05/25 09:33:09 jwolf Exp $
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

  <head>
    <title><MM-List-Name> Info Page</title>
    <?php print $head; ?>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Main stylesheet" charset="utf-8" />
    <!--[if IE 7]>
      <?php print $ie7_styles; ?>
    <![endif]-->
    <!--[if lte IE 6]>
      <?php print $ie6_styles; ?>
    <![endif]-->

  </head>

  <body class="">
    <div id="page" class="clearfix">
      
        <div id="skip">
          <a href="#main-content"><?php print t('Skip to Main Content'); ?></a>
        </div>
      <div id="header-wrapper">
        <div id="header" class="clearfix">
          
					<!--<div id="search-box">

          </div> --> <!-- /search-box --> 

      
          <div id="header-first">

            <div id="logo">
              <a href="/mailman" title="Back to the front page of the MOBIUS Discusssion Lists"><img src="logo.png" alt="Go back to the front page of the MOBIUS Discussion Lists" /></a>
            </div>

            <h1><a href="<?php print check_url($front_page) ?>" title="<?php print t('Home'); ?>">Discussions</a></h1>

            <span id="slogan"></span>

          </div><!-- /header-first -->
  
          <div id="header-middle">

          </div><!-- /header-middle -->
      
          <div id="header-last">

          </div><!-- /header-last -->
      
        </div><!-- /header -->
      </div><!-- /header-wrapper -->
      
      <div id="primary-menu-wrapper" class="clearfix">
        <div id="primary-menu">
        </div><!-- /primary_menu -->
      </div><!-- /primary-menu-wrapper -->

      <div id="preface">
        <div id="preface-wrapper" class="<?php print $prefaces; ?> clearfix">
          <div id="mission"> 
          </div>
        
          <div id="preface-first" class="column">
          </div><!-- /preface-first -->

          <div id="preface-middle" class="column">
          </div><!-- /preface-middle -->

          <div id="preface-last" class="column">
          </div><!-- /preface-last -->
        </div><!-- /preface-wrapper -->
      </div><!-- /preface -->

      <div id="main-wrapper">
        <div id="main" class="clearfix">
          
          <div id="breadcrumb">
          </div><!-- /breadcrumb -->
        
          <div id="sidebar-first">
						Another sidebar
          </div><!-- /sidebar-first -->

          <div id="content-wrapper">



            <div id="content-top">
            </div><!-- /content-top -->
            
            <div id="content">
              <a name="main-content" id="main-content"></a>
              <div id="content-tabs">
              </div>
                <div id="sidebar-last">
                </div><!-- /sidebar_last -->


              <div id="content-inner">
                
                <div id="help">
                </div>

                <h1 class="title">Center column</h1>
                <div id="content-content">
									<p>The stuff in the center column.</p>
                </div>
              </div><!-- /content-inner -->
            </div><!-- /content -->

            <div id="content-bottom">
            </div><!-- /content-bottom -->

          </div><!-- /content-wrapper -->

            <div id="sidebar-last">
	
						A sidebar
            </div><!-- /sidebar_last -->

          <div id="postscript-wrapper" class="<?php print $postscripts; ?> clearfix">
            <div id="postscript-first" class="column">
            </div><!-- /postscript-first -->



            <div id="postscript-middle" class="column">

            </div><!-- /postscript-middle -->

            <div id="postscript-last" class="column">

            </div><!-- /postscript-last -->

          </div><!-- /postscript-wrapper -->

          <div id="footer" class="clearfix">

          </div><!-- /footer -->

          
        </div><!-- /main -->
      </div><!-- /main-wrapper -->
    </div><!-- /page -->
  </body>
</html>
