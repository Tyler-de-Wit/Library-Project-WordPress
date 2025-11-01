<?php

// -------------------- Enqueue stylesheets -------------------- //	
function add_theme_style() {
  
    wp_enqueue_style( 'normalise', get_template_directory_uri() . '/css/normalise.css', array(), '1.0', 'all');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/scss/style.css', array(), '1.0', 'all');

}
add_action( 'wp_enqueue_scripts', 'add_theme_style' );


// -------------------- Enqueue scripts -------------------- //	
function add_theme_script() {
  
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array(), '1.0', 'false');
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0', 'false');

}
add_action( 'wp_enqueue_scripts', 'add_theme_script' );


// -------------------- Create Widgets -------------------- //
function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle) {
	register_sidebar( array(
		'name'          => $name,
		'id'            => $id,
		'description'   => $description,
		'before_widget' => $beforeWidget,
		'after_widget'  => $afterWidget,
		'before_title'  => $beforeTitle,
		'after_title'   => $afterTitle,
	));
}

function multiple_widget_init(){
	widget_registration('Bougainvillea Treasure Image', 'gallery-widget-1-bougainvillea-treasure-image', 'Widget area for Bougainvillea Treasure plant', '<div class="widget">', '</div>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Echeveria Topsy Turvy Price', 'gallery-widget-2-echeveria-topsy-turvy-price', 'Widget area for Echeveria Topsy Turvy plant price', '', '', '<h2 class="widget-title">', '</h2>');
}
add_action('widgets_init', 'multiple_widget_init');


// -------------------- Create Footer Menu -------------------- //	
function register_footer_menu() {
    register_nav_menu( 'footer_menu', 'Footer Menu' );
}
add_action( 'init', 'register_footer_menu' );

// Add class to menu anchor tags
function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'text-reset';
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

// Add classes to menu list tags
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// -------------------- Create Header Menu -------------------- //
// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach($this->current_item->classes as $class) {
            if(in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . 'fs-4 fw-bold' . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
// register a new menu
register_nav_menu('navbarNav', 'Main menu');
