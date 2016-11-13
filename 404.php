<?php get_header(); ?>

<div id="primary" class="container"  >
  <main id="main" class="site-main" role="main">
    <section class="error-404 not-found" >
      <header class="page-header">
        <h1 class="page-title"> Sorry, page not found!</h1>
      </header>
      <div class="page-content">
        <h3>Links</h3>
        <?php get_search_form(); ?>

        <?php the_widget('WP_Widget_Recent_Posts'); ?>

        <div class="widget widget-categories">
          <h3>check most used cattegories</h3>
          <ul>
            <?php wp_list_categories(array(
                  'orderby' => 'count',
                  'odrer' => 'DESC',
                  'show_count' => 1,
                  'title_li' => '',
                  'number' => 3
            )); ?>
          </ul>

        </div>
          <?php the_widget('WP_Widget_Archives','dropdown=1',"after_title=</h2>$archive_content"); ?>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>
