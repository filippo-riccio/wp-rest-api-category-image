<?php

/**
 * Plugin Name: WP REST API Category Images
 * Description: Adds Category Images to WP REST API JSON output.
 * Version: 0.2
 * Author: Deyan Vatsov, Filippo Riccio
 * Plugin URI: https://github.com/filippo-riccio/wp-rest-api-category-image/
 */

if ( !function_exists( 'is_plugin_active' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

new CategoryImageDataPlugin();

class CategoryImageDataPlugin {
	public function __construct() {
		// Add Custom Data
		add_action('rest_api_init', array( $this, 'add_custom_data' ) );
	}

	function add_custom_data() {
		// Register the category type
		register_rest_field('category', 'img', array(
				'get_callback' => array( $this, 'get_custom_data' ),
				'update_callback' => array( $this, 'update_custom_data' ),
				'schema' => array(
					'description' => 'My custom field',
					'type' => 'string',
					'context' => array('view', 'edit')
				)
			)
		);
	}

	/**
	 * Handler for getting custom data.
	 *
	 */
	function get_custom_data($object, $field_name, $request) {
		// get custom data from WP Custom Category Image plugin
		if (method_exists('WPCustomCategoryImage','get_category_image')) {
			return WPCustomCategoryImage::get_category_image(array(
					'term_id' => $object['id'],
					'size'    => 'full',
			), true);
		}
		// get custom data from Category and Taxonomy Image
		if (function_exists('get_wp_term_image')) {
			return get_wp_term_image($object['id']);
		}
	}

	 /**
	 * Handler for updating custom data.
	 */
	function update_custom_data($value, $post, $field_name) {
		if (!$value || !is_string($value)) {
			return;
		}

		return update_post_meta($post->ID, $field_name, strip_tags($value));
	}
}
