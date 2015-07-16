<?php

class CoursePress_Model_Unit {

	private static $post_type = 'unit';

	public static function get_format() {

		return array(
			'post_type' => self::$post_type,
			'post_args' => array(
				'labels'			 => array(
					'name'				 => __( 'Units', 'cp' ),
					'singular_name'		 => __( 'Unit', 'cp' ),
					'add_new'			 => __( 'Create New', 'cp' ),
					'add_new_item'		 => __( 'Create New Unit', 'cp' ),
					'edit_item'			 => __( 'Edit Unit', 'cp' ),
					'edit'				 => __( 'Edit', 'cp' ),
					'new_item'			 => __( 'New Unit', 'cp' ),
					'view_item'			 => __( 'View Unit', 'cp' ),
					'search_items'		 => __( 'Search Units', 'cp' ),
					'not_found'			 => __( 'No Units Found', 'cp' ),
					'not_found_in_trash' => __( 'No Units found in Trash', 'cp' ),
					'view'				 => __( 'View Unit', 'cp' )
				),
				'public'			 => false,
				'show_ui'			 => false,
				'publicly_queryable' => false,
				'capability_type'	 => 'unit',
				'map_meta_cap'		 => true,
				'query_var'			 => true
			)
		);

	}

	public static function get_post_type_name( $with_prefix = false ) {
		if ( ! $with_prefix ) {
			return self::$post_type;
		} else {
			$prefix = defined( 'COURSEPRESS_CPT_PREFIX' ) ? COURSEPRESS_CPT_PREFIX : '';
			$prefix = empty( $prefix ) ? '' : sanitize_text_field( $prefix ) . '_';

			return $prefix . self::$post_type;
		}
	}

}