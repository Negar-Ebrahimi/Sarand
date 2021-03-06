<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage Archie
 * @since Archie 1.0.0
 * @return array An array of default values
 */

function archie_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$archie_default_options = array(
		// Color Options
		'header_title_color'			=> '#fff',
		'header_tagline_color'			=> '#fff',
		'header_txt_logo_extra'			=> 'show-all',
		

		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'nav_search_enable'				=> true,

		// excerpt options
		'long_excerpt_length'           => 25,
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'archie' ), '[the-year]', '[site-link]' ),
		'scroll_top_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( '&#1605;&#1591;&#1575;&#1604;&#1576; &#1608;&#1576;&#1604;&#1575;&#1711;', 'archie' ),
		'hide_date' 					=> false,
		'hide_category'					=> false,
		'hide_author'					=> false,
		'hide_comment'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// Slider
		'slider_section_enable'			=> false,
		'slider_btn_label'				=> esc_html__( '&#1576;&#1740;&#1588;&#1578;&#1585; &#1576;&#1583;&#1575;&#1606;&#1740;&#1583;', 'archie' ),

		// About
		'about_section_enable'			=> false,
		'about_btn_title'				=> esc_html__( '&#1576;&#1740;&#1588;&#1578;&#1585; &#1576;&#1583;&#1575;&#1606;&#1740;&#1583;', 'archie' ),

		// video
		'video_section_enable'			=> false,
		'video_image'					=> get_template_directory_uri() . '/assets/uploads/video.jpg',
		'video_title'					=> esc_html__( '&#1608;&#1740;&#1583;&#1740;&#1608;&#1740; &#1607;&#1601;&#1578;&#1607;', 'archie' ),
		'video_section_url'				=> esc_url_raw( 'https://www.youtube.com/watch?v=0g95kNDC1VU' ),

		// Latest
		'latest_section_enable'			=> false,
		'latest_title'					=> esc_html__( '&#1662;&#1585;&#1608;&#1688;&#1607; &#1607;&#1575;', 'archie' ),

		// service
		'service_section_enable'		=> false,
		'service_btn_label'				=> esc_html__( '&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1607;&#1605;&#1607;', 'archie' ),

		// blog
		'blog_section_enable'			=> false,
		'blog_content_type'				=> 'category',
		'blog_title'					=> esc_html__( '&#1605;&#1591;&#1575;&#1604;&#1576; &#1608;&#1576;&#1604;&#1575;&#1711;', 'archie' ),

		// call to action
		'cta_section_enable'			=> false,
		'cta_btn_title'					=> esc_html__( '&#1576;&#1740;&#1588;&#1578;&#1585; &#1576;&#1583;&#1575;&#1606;&#1740;&#1583;', 'archie' ),

		// testimonial
		'testimonial_section_enable'	=> false,
		'testimonial_title'				=> esc_html__( '&#1606;&#1592;&#1585; &#1605;&#1588;&#1578;&#1585;&#1740;&#1575;&#1606; &#1583;&#1585;&#1576;&#1575;&#1585;&#1607; &#1605;&#1575;', 'archie' ),

		// clients
		'client_section_enable'			=> false,
		
	);

	$output = apply_filters( 'archie_default_theme_options', $archie_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}