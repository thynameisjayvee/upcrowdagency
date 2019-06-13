<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    // public function ajax_filterposts_handler() {
    //
    // 	$args = array(
    // 		'post_type' => 'post',
    // 		'orderby' => 'date',
    // 		'order' => 'DESC'
    // 	);
    //
    // 	// if ( $category != 'all' )
    // 	// 	$args['cat'] = $category;
    //   //
    // 	// if ( $date == 'new' ) {
    // 	// 	$args['order'] = 'DESC';
    // 	// } else {
    // 	// 	$args['order'] = 'ASC';
    // 	// }
    //
    // 	$posts = 'No posts found.';
    //
    // 	$the_query = new \WP_Query( $args );
    //
    //   $response = array(
    //     'posts' => $the_query
    //   );
    // 	wp_send_json($response);
    // }

}
