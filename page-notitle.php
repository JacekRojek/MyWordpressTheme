<?php
/*
    Template Name: No Title
*/
 get_header(); ?>
<h2>This is about page loaded from file</h2>

<?php

if( have_posts() ) :
while ( have_posts() ): the_post(); ?>
<small>Posted on: <?php the_time() ?></small>
<p><?php the_content(); ?></p>
<hr />
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>
