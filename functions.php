<?php
// Menu shortcode

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu-main' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

/*
function list_menu($atts, $content = null) {
    extract(shortcode_atts(array(  
        'menu'            => '', 
        'container'       => '', 
        'container_class' => '', 
        'container_id'    => 'menu-main', 
        'menu_class'      => '', 
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''), 
        $atts));
   
    return wp_nav_menu( array( 
        'menu'            => $menu, 
        'container'       => $container, 
        'container_class' => $container_class, 
        'container_id'    => $container_id, 
        'menu_class'      => $menu_class, 
        'menu_id'         => $menu_id,
        'echo'            => false,
        'fallback_cb'     => $fallback_cb,
        'before'          => $before,
        'after'           => $after,
        'link_before'     => $link_before,
        'link_after'      => $link_after,
        'depth'           => $depth,
        'walker'          => $walker,
        'theme_location'  => $theme_location));
}
add_shortcode("listmenu", "list_menu");
*/
// Add hamburger to menu
/*
add_action( 'generate_inside_navigation','generate_add_navigation_button' );
function generate_add_navigation_button() { 
	wp_nav_menu( array( 'container_class' => 'menu-main', 'theme_location' => 'primary' ) ); 
	?>
	<a class="toggle-nav" href="#">&#9776;</a> 
	<?php }
	*/
?>