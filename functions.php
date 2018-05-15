<?php add_theme_support( 'custom-header' ); ?>
<?php add_theme_support( 'menus' ); ?>
<?php add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'primary' => __( 'primary' ),
'prenav' => __( 'prenav' ),
'footernav' => __( 'footernav' )
)
);
}
?>
<?php

function my_custom_upload_mimes($mimes = array()) {

    // Add a key and value for the CSV file type
    $mimes['png'] = "image/png";

    return $mimes;
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action('upload_mimes', 'my_custom_upload_mimes');

add_theme_support( 'post-thumbnails' );
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'page-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="page-widget-name">',
        'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'blog-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="page-widget-name">',
        'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'project-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="page-widget-name">',
        'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer-sidebar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="footer-widget-name">',
        'after_title' => '</div>',
));
}

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
// Remove P Tags Around Images 
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...<div style="clear:both;"></div><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &raquo;</a>';
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
?>