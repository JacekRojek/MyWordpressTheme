<?php get_header(); ?>
<div class="row">
<div id="test-carousel" class="carousel slide" data-ride="carousel">



  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    $args=array(
          type=>'post',
          posts_per_page =>3
                );
    $lastBlog = new WP_Query($args);
    if( $lastBlog->have_posts() ) :
      $count = 0;
      $bullets='';
    while ( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>


      <div class="item <?php if($count == 0): echo 'active'; endif; ?>">
        <?php the_post_thumbnail('full'); ?>
        <div class="carousel-caption">
          <?php the_title(  sprintf('<h1 class="entry-title"><a href="%s">',esc_url(get_permalink()) ),'</a></h1>'); ?>
        </div>
      </div>
        <?php $bullets .=  '<li data-target="#test-carousel" data-slide-to="'.$count.'" class="'; ?>
            <?php if($count == 0): $bullets .= 'active'; endif; ?>
           <?php $bullets .= '"></li>'; ?>

    <?php $count=$count+1;
    endwhile;
    endif;

  wp_reset_postdata(); ?>
  <ol class="carousel-indicators">
    <li data-target="#test-carousel" data-slide-to="1"></li>
    <li data-target="#test-carousel" data-slide-to="2"></li>
  </ol>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#test-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#test-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8">

<?php
if( have_posts() ) :
while ( have_posts() ): the_post(); ?>
<?php get_template_part('content', get_post_format()); ?>

<?php
endwhile;
endif;
?>

</div>
<div class="col-xs-12 col-sm-4">
  <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
