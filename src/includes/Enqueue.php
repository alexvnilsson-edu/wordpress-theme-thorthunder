<?php
/**
 * Code the Change Foundation enqueue functions
 *
 * @package {{ template.name }}
 * @version {{ templateVersion }}
 */
namespace ThorThunder\WordPressTheme;

Enqueue::initialize();

class Enqueue
{
    public static function initialize()
    {
        add_action('wp_enqueue_scripts', array(__CLASS__, 'load_assets'));
        add_action('init', array(__CLASS__, 'register_blocks'));
        add_action('admin_init', array(__CLASS__, 'load_admin_assets'));
    }

    public static function register_blocks()
    {
        // Load scripts
        wp_register_script('thorthunder-block-contact', get_template_directory_uri() . '/assets/js/blocks/contact.js', array('wp-blocks', 'wp-element'), '{{ template.version }}');

        // Register
        register_block_type('thorthunder/contact', array(
            'editor_script' => 'thorthunder-block-contact'
        ));
    }

    public static function load_admin_assets()
    {
        wp_enqueue_style('thorthunder-editor-style', get_template_directory_uri() . '/assets/css/editor/style.css', array(), '{{ template.version }}', 'all');
    }

    public static function load_assets()
    {
        // Google Font enqueues
        wp_enqueue_style('vendor-googlefont-robotoslab', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap', false);
        wp_enqueue_style('vendor-googlefont-materialicon', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);

        // Project
        wp_enqueue_style('thorthunder-main-style', get_template_directory_uri() . '/assets/css/main/style.css', array(), '{{ template.version }}', 'all');

        // wp_enqueue_script('thorthunder-vendor', get_template_directory_uri() . "/assets/js/vendor.min.js", array(), '{{ template.version }}', true);
        wp_enqueue_script('thorthunder-main', get_template_directory_uri() . "/assets/js/main.js", array(), '{{ template.version }}', true);
    }
}