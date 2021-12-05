<?php
/*
Plugin Name: Home Owl Slider
Plugin URI: http://www.grouphoenix.com/
Description:  A simple plugin to include an Home Owl Carousel
Author: Andeep Raj rahi
Version: 1.0
Author URI:http://www.andeeprahi.com/
License: GPL2
*/

class AR_Home_Slider
{
    protected $_meta_box;
    protected $_fields;

    public function __construct()
    {
        $this->_meta_box = $this->boxes();
        $this->_fields = &$this->_meta_box['fields'];
        $this->register_post_type();
        //$this->taxonomies();

        //$this->Slider_setting();
        add_action('admin_menu', array(&$this, 'add')); // add meta box
        add_action('save_post', array(&$this, 'save')); // save meta box's data

    }


    public function register_post_type()
    {
        $args = array(
            'labels' => array(
                'name' => _x('Slider', 'mdev-home-'),
                'singular_name' => _x('Slider', 'ar-home-slider'),
                'add_new' => _x('Add New Slide', 'ar-home-slider'),
                'add_new_item' => _x('Add New Slide ', 'ar-home-slider'),
                'edit_item' => _x('Edit Slider  ', 'ar-home-slider'),
                'new_item' => _x('New Slider ', 'ar-home-slider'),
                'view_item' => _x('View Slider', 'ar-home-slider'),
                'search_items' => _x('Search Slider ', 'ar-home-slider'),
                'not_found' => _x('Not found any Slider', 'ar-home-slider'),
                'not_found_in_trash' => _x('No Slider  found in Trash', 'ar-home-slider'),
                'parent_item_colon' => _x('Parent Slider:', 'ar-home-slider'),
                'menu_name' => _x('Slider Manager', 'ar-home-slider'),
            ),
            'hierarchical' => false,
            'supports' => array('title', 'page-attributes', 'thumbnail'),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'sliders')

        );

        register_post_type('slider_manager', $args);

        $args = array(
            'labels' => array(
                'name' => _x('Slider', 'mdev-home-'),
                'singular_name' => _x('Slider', 'ar-home-slider'),
                'add_new' => _x('Add New Slide', 'ar-home-slider'),
                'add_new_item' => _x('Add New Slide ', 'ar-home-slider'),
                'edit_item' => _x('Edit Slider  ', 'ar-home-slider'),
                'new_item' => _x('New Slider ', 'ar-home-slider'),
                'view_item' => _x('View Slider', 'ar-home-slider'),
                'search_items' => _x('Search Slider ', 'ar-home-slider'),
                'not_found' => _x('Not found any Slider', 'ar-home-slider'),
                'not_found_in_trash' => _x('No Slider  found in Trash', 'ar-home-slider'),
                'parent_item_colon' => _x('Parent Slider:', 'ar-home-slider'),
                'menu_name' => _x('Slider Manager ACC', 'ar-home-slider'),
            ),
            'hierarchical' => false,
            'supports' => array('title', 'page-attributes', 'thumbnail'),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'sliders')

        );

        register_post_type('slider_manager_acc', $args);
    }

    function add()
    {

        foreach ($this->_meta_box['pages'] as $page) {
            add_meta_box($this->_meta_box['id'], $this->_meta_box['title'], array(&$this, 'show'), $page, $this->_meta_box['context'], $this->_meta_box['priority']);
        }
    }

    // Callback function to show fields in meta box
    function show()
    {
        global $post;

        wp_nonce_field(basename(__FILE__), 'rw_meta_box_nonce');
        echo '<table class="form-table">';

        foreach ($this->_fields as $field) {
            $meta = get_post_meta($post->ID, $field['id'], !$field['multiple']);
            $meta = !empty($meta) ? $meta : '';

            echo '<tr>';
            // call separated methods for displaying each type of field
            call_user_func(array(&$this, 'show_field_' . $field['type']), $field, $meta);
            echo '</tr>';
        }
        echo '</table>';
    }

    /******************** END META BOX PAGE **********************/

    /******************** BEGIN META BOX FIELDS **********************/

    function show_field_begin($field, $meta)
    {
        echo "<th style='width:20%'><label for='{$field['id']}'>{$field['name']}</label></th><td>";
    }
    function show_field_end($field, $meta)
    {
        echo "<label for='{$field['id']}'><small>{$field['desc']}</small></label>";
    }

    function show_field_text($field, $meta)
    {
        $this->show_field_begin($field, $meta);
        echo "<input type='text' name='{$field['id']}' id='{$field['id']}' value='$meta' size='30' style='width:97%' /><br />";
        $this->show_field_end($field, $meta);
    }
    /******************** END META BOX FIELDS **********************/

    /******************** BEGIN META BOX SAVE **********************/

    // Save data from meta box
    function save($post_id)
    {
        global $post_type;
        if (isset($_POST['post_type'])) {
            $post_type_object = get_post_type_object($_POST['post_type']);
        }

        if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) // check autosave
            || (!isset($_POST['post_ID']) || $post_id != $_POST['post_ID']) // check revision
            || (!in_array($_POST['post_type'], $this->_meta_box['pages'])) // check if current post type is supported
            || (!check_admin_referer(basename(__FILE__), 'rw_meta_box_nonce')) // verify nonce
            || (!current_user_can($post_type_object->cap->edit_post, $post_id))
        ) { // check permission
            return $post_id;
        }

        foreach ($this->_fields as $field) {
            $name = $field['id'];
            $type = $field['type'];
            $old = get_post_meta($post_id, $name, !$field['multiple']);
            $new = isset($_POST[$name]) ? $_POST[$name] : ($field['multiple'] ? array() : '');

            // validate meta value
            if (class_exists('RW_Meta_Box_Validate') && method_exists('RW_Meta_Box_Validate', $field['validate_func'])) {
                $new = call_user_func(array('RW_Meta_Box_Validate', $field['validate_func']), $new);
            }

            // call defined method to save meta value, if there's no methods, call common one
            $save_func = 'save_field_' . $type;
            if (method_exists($this, $save_func)) {
                call_user_func(array(&$this, 'save_field_' . $type), $post_id, $field, $old, $new);
            } else {
                $this->save_field($post_id, $field, $old, $new);
            }
        }
    }

    // Common functions for saving field
    function save_field($post_id, $field, $old, $new)
    {
        $name = $field['id'];

        // single value
        if (!$field['multiple']) {
            if ('' != $new && $new != $old) {
                update_post_meta($post_id, $name, $new);
            } elseif ('' == $new) {
                delete_post_meta($post_id, $name, $old);
            }
            return;
        }

        // multiple values
        // get new values that need to add and get old values that need to delete
        $add = array_diff($new, $old);
        $delete = array_diff($old, $new);
        foreach ($add as $add_new) {
            add_post_meta($post_id, $name, $add_new, false);
        }
        foreach ($delete as $delete_old) {
            delete_post_meta($post_id, $name, $delete_old);
        }
    }


    /**
     * setting  for the Slider manager
     */


    public function boxes()
    {
        $prefix = 'AR_';
        return array(
            'id' => 'Slider_personal', // meta box id, unique per meta box
            'title' => 'Slider  Information <br /><small>The image should be between 1600px - 2000px in width and have a minimum height of 700px for best results. Click the "Upload" button to begin uploading your image, followed by "Select File" once you have made your selection.</small>', // meta box title
            'pages' => array('slider_manager'), // post types, accept custom post types as well, default is array('post'); optional
            'context' => 'normal', // where the meta box appear: normal (default), advanced, side; optional
            'priority' => 'high', // order of meta box: high (default), low; optional

            'fields' => array( // list of meta fields

                array(
                    'name' => __('Caption', 'mdev-slider-manager'), // field name
                    'desc' => __('Enter in the slide caption. (should be fairly short)', 'mdev-slider-manager'), // field description, optional
                    'id' => $prefix . 'slider_caption', // field id, i.e. the meta key
                    'type' => 'text', // text box
                    'std' => '' // default value, optional
                ),
                array(
                    'name' => __('Caption Class', 'mdev-slider-manager'), // field name
                    'desc' => __('Enter caption class for center:: carousel-caption-center for left:: carousel-caption-left', 'mdev-slider-manager'), // field description, optional
                    'id' => $prefix . 'slider_caption_class', // field id, i.e. the meta key
                    'type' => 'text', // text box
                    'std' => '' // default value, optional
                )
            )
        );
    }


    /******************** END HELPER FUNCTIONS **********************/
}

add_action('init', function () {
    new AR_Home_Slider();
});
