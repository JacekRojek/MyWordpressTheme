
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
  </head>
  <?php if ( is_home() ):
 $test_classes = array('test-class' ,'home-class' );
 else:
    $test_classes = array('nothome-class' );
  endif;
     ?>
  <body <?php body_class( $test_classes); ?>>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Test</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php wp_nav_menu(array(
                    'theme_location'=>'primary',
                    'container'=>false,
                    'menu_class'=>'navbar-nav nav navbar-right'
                  )); ?>
                </div>
              </div>
      </nav>
  </div>
<div class="col-xs-12">
  <div class="search-form-container">
    <?php get_search_form(); ?>
  </div>

</div>

</div>



    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
