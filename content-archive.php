
<article id="post-"<?php the_ID(); ?> <?php post_class() ?> >
  <header class="entry-header">
    <h1><?php the_title(  sprintf('<h1 class="entry-title"><a href="%s">',esc_url(get_permalink()) ),'</a></h1>'); ?></h1>
    <small>Posted on: <?php the_time() ?></small>
  </header>
  <div class="row">
    <?php if( has_post_thumbnail() ): ?>
    <div class="col-xs-12 col-sm-4">
      <div class="thumbnail">
        <?php the_post_thumbnail('medium'); ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-8">
  <p><?php the_excerpt(); ?></p>
</div>
<?php else: ?>
  <div class="col-xs-12">
<p><?php the_excerpt(); ?></p>
    </div>
<?php endif; ?>

  </div>
</article>
