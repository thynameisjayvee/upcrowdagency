<?php
/**
 * Enqueue block editor only JavaScript and CSS.
 *
 */
function enqueue_block_editor_assets() {
  $block_path = 'assets/blocks/js/editor.blocks.js';
  $style_path = 'assets/blocks/css/blocks.editor.css';

	// Enqueue the bundled block JS file
  wp_enqueue_script( 'rpt-blocks-js', RELATED_POSTS_THUMBNAILS_URI.$block_path, array('wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor'), RELATED_POSTS_THUMBNAILS_VERSION );

	// Enqueue optional editor only styles
  wp_enqueue_style( 'rpt-blocks-editor-css', RELATED_POSTS_THUMBNAILS_URI.$style_path, array(), RELATED_POSTS_THUMBNAILS_VERSION );
}

add_action('enqueue_block_editor_assets', 'enqueue_block_editor_assets');

/**
 * Enqueue front end and editor JavaScript and CSS assets.
 *
 */
function enqueue_assets() {
  $style_path = 'assets/blocks/css/blocks.style.css';
  wp_enqueue_style( 'rpt-blocks', RELATED_POSTS_THUMBNAILS_URI.$style_path , null, RELATED_POSTS_THUMBNAILS_VERSION );
}

add_action('enqueue_block_assets', 'enqueue_assets');

/**
 * Enqueue frontend JavaScript and CSS assets.
 *
 */
function enqueue_frontend_assets() {
  // If in the backend, bail out.
  if (is_admin()) {
    return;
  }

  $block_path = 'assets/blocks/js/frontend.blocks.js';

  wp_enqueue_script( 'rpt-blocks-frontend', RELATED_POSTS_THUMBNAILS_URI.$block_path, array(), RELATED_POSTS_THUMBNAILS_VERSION );
}

add_action('enqueue_block_assets', 'enqueue_frontend_assets');

/**
 * Create related posts block category.
 *
 */
function rpt_block_category( $categories ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'related-post-thumbnails-blocks',
				'title' => __( 'Related Posts Thumbnails', 'related-post-thumbnails' ),
			),
		)
	);
}

add_filter( 'block_categories', 'rpt_block_category', 10, 2);

/* * * * * * * * * *
* Dynamic Block
* * * * * * * * * */

add_action('plugins_loaded', 'register_rpt_dynamic_block');

/**
 * Register the dynamic block.
 *
 * @since 2.0.0
 *
 * @return void
 */
function register_rpt_dynamic_block() {
	// Only load if Gutenberg is available.
  if (!function_exists('register_block_type')) {
    return;
  }

	// Hook server side rendering into render callback
  register_block_type('related-post-thumbnails/rpt-block', array(
    'render_callback' => 'render_rpt_dynamic_block'
  ));
}

/**
 * Server rendering
 */
function render_rpt_dynamic_block($atts) {
  $posts_number = 3;
  $posts_sort   = 'random';
  $main_title   = '';

  if ( ! empty( $atts ) ) {
    $posts_number = isset($atts['postNumber']) ? $atts['postNumber'] : $posts_number;
    $posts_sort   = isset($atts['postSort']) ? $atts['postSort'] : $posts_sort;
    $main_title   = isset($atts['mainTitle']) ? str_replace( ' ', '_', $atts['mainTitle'] ) : $main_title;
  }

  return do_shortcode( '[related-posts-thumbnails posts_number=' . $posts_number . ' posts_sort=' . $posts_sort . ' main_title=' . $main_title . ']' );
}

?>
