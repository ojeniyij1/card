<?php



function load_css() {

    wp_register_style('main', get_template_directory_uri() . '/css/main.css',
    array(), false, 'all' );
    wp_enqueue_style('main');


}

add_action('wp_enqueue_scripts' , 'load_css');

// Register Custom Post Type "Card"
/*function create_card_post_type() {
    $labels = array(
        'name'                  => _x( 'cards', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'card', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'cards', 'textdomain' ),
        'name_admin_bar'        => __( 'card', 'textdomain' ),
        'archives'              => __( 'Card Archives', 'textdomain' ),
        'attributes'            => __( 'Card Attributes', 'textdomain' ),
        'all_items'             => __( 'All Cards', 'textdomain' ),
        'add_new_item'          => __( 'Add New Card', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Card', 'textdomain' ),
        'edit_item'             => __( 'Edit Card', 'textdomain' ),
        'update_item'           => __( 'Update Card', 'textdomain' ),
        'view_item'             => __( 'View Card', 'textdomain' ),
        'search_items'          => __( 'Search Card', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Card Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set card image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove card image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as card image', 'textdomain' ),
    );

    $args = array(
        'label'                 => __( 'card', 'textdomain' ),
        'description'           => __( 'Custom post type for team cards', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public'                => true,
        'show_ui'               => true,
        'menu_icon'             => 'dashicons-id',
        'has_archive'           => true,
        'show_in_rest'          => true,
    );

    register_post_type( 'card', $args );
}
add_action( 'init', 'create_card_post_type', 0 );

function display_custom_post_type($atts) {
    // Parse shortcode attributes
    $atts = shortcode_atts(
        array(
            'posts_per_page' => 5, // Default number of posts
        ),
        $atts,
        'custom_post_shortcode'
    );

    // Custom query for the custom post type
    $query = new WP_Query(array(
        'post_type' => 'my_custom_post_type',
        'posts_per_page' => $atts['posts_per_page'],
    ));

    // Output buffering
    ob_start();

    // Loop through the posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        <?php endwhile;
    else :
        echo 'No posts found';
    endif;

    wp_reset_postdata();

    // Return the content
    return ob_get_clean();
}
add_shortcode('custom_post_shortcode', 'display_custom_post_type');
*/