<?php

/**
 * use BoldizArt\WpTheme\Base;
 */

namespace BoldizArt\WpTheme;

class CustomPostTypes
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        // Add actions
        if (function_exists('add_action')) {

            // Register custom post types
            \add_action('init', [$this, 'registerCustomPostTypes']);

            // Register custom taxonomies
            \add_action('init', [$this, 'registerCustomTaxonomies']);
        }
    }

    /**
     * Create a new post type
     */
    function registerCustomPostTypes()
    {
        // Set UI labels for Custom Post Type
        $labels = [
            'name' => _x('Portfolio', 'Post Type General Name', 'fruskogorac'),
            'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'fruskogorac'),
            'menu_name' => __('Portfolio', 'fruskogorac'),
            'parent_item_colon' => __('Parent portfolio item', 'fruskogorac'),
            'all_items' => __('All items', 'fruskogorac'),
            'view_item' => __('View portfolio item', 'fruskogorac'),
            'add_new_item' => __('Add new item', 'fruskogorac'),
            'add_new' => __('Add new', 'fruskogorac'),
            'edit_item' => __('Edit portfolio item', 'fruskogorac'),
            'update_item' => __('Update portfolio item', 'fruskogorac'),
            'search_items' => __('Search portfolio item', 'fruskogorac'),
            'not_found' => __('Not hound', 'fruskogorac'),
            'not_found_in_trash'  => __('Not found in trash', 'fruskogorac'),
        ];

        // Set other options for Custom Post Type 
        $args = [
            'label' => __('Portfolio', 'fruskogorac'),
            'description' => __('Website portfolio', 'fruskogorac'),
            'labels' => $labels,
            'supports' => [
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail',
                'comments',
                'revisions',
                'custom-fields',
                'taxonomies'
            ],
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 5,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'show_in_rest' => true,

            // This is where we add taxonomies to our CPT
            'taxonomies' => [
                'projects'
            ]
        ];

        // Registering your Custom Post Type
        register_post_type('portfolio', $args);
    }

    /**
     * Register custom taxonomy
     */
    function registerCustomTaxonomies()
    {
        // Set labels
        $labels = [
            'name' => _x('Projects', 'taxonomy general name'),
            'singular_name' => _x('Project', 'taxonomy singular name'),
            'search_items' => __('Search projects', 'fruskogorac'),
            'all_items' => __('All projects', 'fruskogorac'),
            'parent_item' => __('Parent project', 'fruskogorac'),
            'parent_item_colon' => __('Parent project:', 'fruskogorac'),
            'edit_item' => __('Edit project', 'fruskogorac'),
            'update_item' => __('Update project', 'fruskogorac'),
            'add_new_item' => __('Add new project', 'fruskogorac'),
            'new_item_name' => __('New project', 'fruskogorac'),
            'menu_name' => __('Projects', 'fruskogorac'),
        ];

        // Set args
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => [
                'slug' => 'projects'
            ],
            'show_ui' => true,
            'show_in_rest' => true
        ];

        // Register taxonomy
        register_taxonomy('projects', ['portfolio'], $args);
        register_taxonomy_for_object_type('projects', 'portfolio');
    }
}
