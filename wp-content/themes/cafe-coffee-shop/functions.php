<?php
	add_action( 'wp_enqueue_scripts', 'cafe_coffee_shop_enqueue_styles' );
	function cafe_coffee_shop_enqueue_styles() {
    	$parent_style = 'vw-bakery-basic-style'; // Style handle of parent theme.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );		
		wp_enqueue_style( 'cafe-coffee-shop-style', get_stylesheet_uri(), array( $parent_style ) );
		require get_parent_theme_file_path( '/inline-style.php' );
		wp_add_inline_style( 'vw-bakery-basic-style',$vw_bakery_custom_css );
		require get_theme_file_path( '/inline-style.php' );
		wp_add_inline_style( 'cafe-coffee-shop-style',$vw_bakery_custom_css );
	}

	add_action( 'init', 'cafe_coffee_shop_remove_parent_function');
	function cafe_coffee_shop_remove_parent_function() {
		remove_action( 'admin_notices', 'vw_bakery_activation_notice' );
		remove_action( 'wp_enqueue_scripts', 'vw_bakery_header_style' );
		remove_action( 'admin_menu', 'vw_bakery_gettingstarted' );
		unregister_sidebar( 'social-icon' );
	}

	function cafe_coffee_shop_remove_parent_theme_locations(){
    	unregister_nav_menu( 'primary-right' );
    	unregister_nav_menu( 'responsive-menu' );
	}
	add_action( 'after_setup_theme', 'cafe_coffee_shop_remove_parent_theme_locations', 20 );

	function cafe_coffee_shop_customize_register() {
		global $wp_customize;
		$wp_customize->remove_setting( 'vw_bakery_topbar_hide_show' );
		$wp_customize->remove_control( 'vw_bakery_topbar_hide_show' );
		$wp_customize->remove_setting( 'vw_bakery_topbar_padding_top_bottom' );
		$wp_customize->remove_control( 'vw_bakery_topbar_padding_top_bottom' );
		$wp_customize->remove_setting( 'vw_bakery_search_hide_show' );
		$wp_customize->remove_control( 'vw_bakery_search_hide_show' );
		$wp_customize->remove_setting( 'vw_bakery_search_font_size' );
		$wp_customize->remove_control( 'vw_bakery_search_font_size' );
		$wp_customize->remove_setting( 'vw_bakery_location_address_icon' );
		$wp_customize->remove_control( 'vw_bakery_location_address_icon' );
		$wp_customize->remove_setting( 'vw_bakery_location' );
		$wp_customize->remove_control( 'vw_bakery_location' );
		$wp_customize->remove_setting( 'vw_bakery_timing_icon' );
		$wp_customize->remove_control( 'vw_bakery_timing_icon' );
		$wp_customize->remove_setting( 'vw_bakery_opening_text' );
		$wp_customize->remove_control( 'vw_bakery_opening_text' );
		$wp_customize->remove_setting( 'vw_bakery_opening_time' );
		$wp_customize->remove_control( 'vw_bakery_opening_time' );
		$wp_customize->remove_setting( 'vw_bakery_contact_link' );
		$wp_customize->remove_control( 'vw_bakery_contact_link' );
		$wp_customize->remove_setting( 'vw_bakery_cart_icon' );
		$wp_customize->remove_control( 'vw_bakery_cart_icon' );
		$wp_customize->remove_setting( 'vw_bakery_resp_topbar_hide_show' );
		$wp_customize->remove_control( 'vw_bakery_resp_topbar_hide_show' );
		$wp_customize->remove_setting( 'vw_bakery_stickyheader_hide_show' );
		$wp_customize->remove_control( 'vw_bakery_stickyheader_hide_show' );
		$wp_customize->remove_setting( 'vw_bakery_sticky_header' );
		$wp_customize->remove_control( 'vw_bakery_sticky_header' );	
		$wp_customize->remove_setting( 'vw_bakery_sticky_header_padding' );
		$wp_customize->remove_control( 'vw_bakery_sticky_header_padding' );	
		$wp_customize->remove_setting( 'vw_bakery_contact_button_text' );
		$wp_customize->remove_control( 'vw_bakery_contact_button_text' );
		$wp_customize->remove_setting( 'vw_bakery_slider_button_text' );
		$wp_customize->remove_control( 'vw_bakery_slider_button_text' );		
	}
	add_action( 'customize_register', 'cafe_coffee_shop_customize_register', 11 );

	function cafe_coffee_shop_header_style() {
		if ( get_header_image() ) :
		$custom_css = "
	        #header{
				background-image:url('".esc_url(get_header_image())."');
				background-position: center top;
				background-size: 100%;
			}";
		   	wp_add_inline_style( 'cafe-coffee-shop-style', $custom_css );
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'cafe_coffee_shop_header_style' );

	function cafe_coffee_shop_scripts() {	
		wp_enqueue_script( 'Custom JS ', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery') );
	}
	add_action( 'wp_enqueue_scripts', 'cafe_coffee_shop_scripts' );

	function cafe_coffee_shop_font_url() {
		$font_url      = '';
		$font_family   = array();
		$font_family[] = 'Playfair Display';
		$font_family[] = 'Poppins:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
		$query_args = array(
			'family' => rawurlencode(implode('|', $font_family)),
		);
		$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
		return $font_url;
	}
	
	function cafe_coffee_shop_customizer ( $wp_customize ) {

		//About section
		$wp_customize->add_section( 'cafe_coffee_shop_about_section' , array(
	    	'title'      => __( 'About us Section', 'cafe-coffee-shop' ),
			'priority'   => 20,
			'panel' => 'vw_bakery_panel_id'
		) );

		$wp_customize->add_setting('cafe_coffee_shop_section_title',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('cafe_coffee_shop_section_title',array(
			'label'	=> __('Add Section Text','cafe-coffee-shop'),
			'input_attrs' => array(
	            'placeholder' => __( 'OUR STORY', 'cafe-coffee-shop' ),
	        ),
			'section'=> 'cafe_coffee_shop_about_section',
			'type'=> 'text'
		));

		$wp_customize->add_setting( 'cafe_coffee_shop_about_page' , array(
			'default'           => '',
			'sanitize_callback' => 'cafe_coffee_shop_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'cafe_coffee_shop_about_page' , array(
			'label'    => __( 'Select About Page', 'cafe-coffee-shop' ),
			'section'  => 'cafe_coffee_shop_about_section',
			'type'     => 'dropdown-pages'
		) );

		$wp_customize->add_setting( 'cafe_coffee_shop_about_excerpt_number', array(
			'default'              => 30,
			'type'                 => 'theme_mod',
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'absint',
			'sanitize_js_callback' => 'absint',
		) );
		$wp_customize->add_control( 'cafe_coffee_shop_about_excerpt_number', array(
			'label'       => esc_html__( 'About Excerpt length','cafe-coffee-shop' ),
			'section'     => 'cafe_coffee_shop_about_section',
			'type'        => 'range',
			'settings'    => 'cafe_coffee_shop_about_excerpt_number',
			'input_attrs' => array(
				'step'             => 5,
				'min'              => 0,
				'max'              => 50,
			),
		) );
	}
	add_action( 'customize_register', 'cafe_coffee_shop_customizer' );

	function cafe_coffee_shop_sanitize_choices( $input, $setting ) {
	    global $wp_customize; 
	    $control = $wp_customize->get_control( $setting->id ); 
	    if ( array_key_exists( $input, $control->choices ) ) {
	        return $input;
	    } else {
	        return $setting->default;
	    }
	}

	function cafe_coffee_shop_sanitize_select( $input, $setting ){      
	    $input = sanitize_key($input);
	    $choices = $setting->manager->get_control( $setting->id )->choices;
	    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );      
	}

	function cafe_coffee_shop_sanitize_dropdown_pages( $page_id, $setting ) {
	  	$page_id = absint( $page_id );
	  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

// Customizer Pro
require_once( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class Cafe_Coffee_Shop_Customize_Section_Pro extends WP_Customize_Section {
	public $type = 'cafe-coffee-shop';
	public $pro_text = '';
	public $pro_url = '';
	public function json() {
		$json = parent::json();
		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );
		return $json;
	}
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

final class VW_Bakery_Customize {
	public static function get_instance() {
		static $instance = null;
		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}
		return $instance;
	}
	private function __construct() {}
	private function setup_actions() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}
	public function sections( $manager ) {
		// Register custom section types.
		$manager->register_section_type( 'Cafe_Coffee_Shop_Customize_Section_Pro' );
		// Register sections.
		$manager->add_section( new Cafe_Coffee_Shop_Customize_Section_Pro( $manager, 'cafe_coffee_shop',array(
			'priority'   => 1,
			'title'    => esc_html__( 'COFFEE SHOP PRO', 'cafe-coffee-shop' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'cafe-coffee-shop' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/cafe-wordpress-theme/'),
		) ) );
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'cafe-coffee-shop-customize-controls', get_stylesheet_directory_uri() . '/js/customize-controls-child.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'cafe-coffee-shop-customize-controls', get_stylesheet_directory_uri() . '/css/customize-controls-child.css' );
	}
}
VW_Bakery_Customize::get_instance();