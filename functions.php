<?php
function test_script_enqueue() {

wp_enqueue_style ('bootsrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array(), '3.3.7', 'all' );
wp_enqueue_style ('style', get_template_directory_uri() . '/css/test.css' , array(), '1.0.0', 'all' );

wp_enqueue_script ('jquery',true);
wp_enqueue_script ('bootsrapjs', get_template_directory_uri() . '/js/bootstrap.min.js' , array(), '3.3.7', true);
wp_enqueue_script ('script_test', get_template_directory_uri() . '/js/test.js' , array(), '1.0.0', true);
}
 add_action( 'wp_enqueue_scripts','test_script_enqueue');

function test_theme_setup(){
add_theme_support('menus');

register_nav_menu('primary','Primary Navigation');
register_nav_menu('secoundary','Footer Navigation');
}

 add_action( 'init','test_theme_setup');
 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('post-thumbnails');
 add_theme_support('post-formats', array('aside','image','video'));
 add_theme_support('html5',array('search-form'));

 function test_widget_setup(){
   register_sidebar(array(
     'name' => 'Sidebar',
     'id' => 'sidebar-1',
     'class' => 'custom',
     'description' => 'Standard sidebar',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget' => "</aside>",
     'before_title' => '<h2 class="widgettitle">',
     'after_title' => "</h2>"
   ));
 }
     add_action( 'widgets_init','test_widget_setup');

function test_custom_post_type(){
$labels = array(
  'name' => 'Portfolio',
  'singular_name' => 'Portfolio',
  'add_new' => 'Add Item',
  'add_new_item' => 'Add Item',
  'all_items' => 'All Items',
  'edit_item' => 'Edit Item',
  'new_item' => 'New Item',
  'view_item' => 'View Item',
  'search_item' => 'Search Portfolio',
  'not_found' => 'No items found',
  'not_found_in_trash' => 'No items found in trash',
  'parent_item_colon' => 'Parent Item'
);
$args= array(
  'labels' => $labels,
  'public' => true,
  'has_archive' => true,
  'publicly_queryable' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_true' => 'post',
  'hierarchial' => false,
  'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      ),
//  'taxonomies' => array('category','post_tag'),
  'menu_position' => 5,
  'exclude_from_search' => false
);
register_post_type('portfolio',$args);

}
add_action('init','test_custom_post_type');

function test_custom_taxonomies(){
$labels = array(
'name' => 'Types',
'singular_name' => 'Type',
'add_new_item' => 'Add Type Name',
'all_items' => 'All Types',
'edit_item' => 'Edit Type',
'new_item_name' => 'New Type Name',
'search_items' => 'Search Types',
'parent_item_colon' => 'Parent Type:',
'parent_item' => 'Parent Type',
'update_item' => 'Update Type',
'menu_name' => 'Type'
);
$args= array(
  'labels' => $labels,
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'field'),
  'hierarchial' => true,
);
register_taxonomy('field', array('portfolio') ,$args);

register_taxonomy('software', 'portfolio' ,array(
  'label' => 'Software',
  'rewrite' => array( 'slug' => 'software'),
  'hierarchial' => false,
));

}
add_action('init','test_custom_taxonomies');

  ?>
