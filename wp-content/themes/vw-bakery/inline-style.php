<?php
	
	/*---------------First highlight color-------------------*/

	$vw_bakery_first_color = get_theme_mod('vw_bakery_first_color');

	$vw_bakery_custom_css = '';

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.cart_box, .contact-btn a, .products li:hover span.onsale, #footer, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, input[type="submit"], .pagination span, .pagination a, #comments a.comment-reply-link, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar .woocommerce-product-search button, .nav-previous a, .nav-next a{';
			$vw_bakery_custom_css .='background-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='#comments input[type="submit"].submit{';
			$vw_bakery_custom_css .='background-color: '.esc_html($vw_bakery_first_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='a, a.more-btn:hover, a.content-bttn:hover, .mid-contact p, .products li:hover span, #footer .tagcloud a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-main-box:hover h2 a, .post-main-box:hover a, .woocommerce-message::before, #sidebar a.custom_read_more:hover{';
			$vw_bakery_custom_css .='color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.post-info hr, .woocommerce-message, .main-navigation ul ul{';
			$vw_bakery_custom_css .='border-top-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.main-navigation ul ul, .header-fixed{';
			$vw_bakery_custom_css .='border-bottom-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.logo_outer{';
			$vw_bakery_custom_css .='border-left-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.logo_outer{';
			$vw_bakery_custom_css .='border-right-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_custom_css .='@media screen and (max-width:720px) {';
		if($vw_bakery_first_color != false){
			$vw_bakery_custom_css .='#header{
			background-color:'.esc_html($vw_bakery_first_color).';
			}';
		}
	$vw_bakery_custom_css .='}';

	$vw_bakery_custom_css .='@media screen and (min-width:768px) and (max-width: 1023px) {';
		if($vw_bakery_first_color != false){
			$vw_bakery_custom_css .='.logo img, .logo, .logo_outer_box{
			background-color:'.esc_html($vw_bakery_first_color).';
			}';
		}
	$vw_bakery_custom_css .='}';

	/*---------------------------Second highlight color-------------------*/

	$vw_bakery_second_color = get_theme_mod('vw_bakery_second_color');

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#topbar, .time, .woocommerce span.onsale, #footer input[type="submit"], .scrollup i, #footer-2, #footer .woocommerce #respond input#submit, #footer .woocommerce a.button, #footer .woocommerce button.button, #footer .woocommerce input.button, #footer .woocommerce #respond input#submit.alt, #footer .woocommerce a.button.alt, #footer .woocommerce button.button.alt, #footer .woocommerce input.button.alt, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button:hover, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer .woocommerce-product-search button:hover, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .nav-previous a:hover, .nav-next a:hover{';
			$vw_bakery_custom_css .='background-color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .custom-social-icons i, #sidebar .custom-social-icons i{';
			$vw_bakery_custom_css .='color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_bakery_custom_css .='border-color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_width_option','Full Width');
    if($vw_bakery_theme_lay == 'Boxed'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .inner-carousel-conetnt{';
			$vw_bakery_custom_css .='top: -9em;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='top: 43%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Wide Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .inner-carousel-conetnt{';
			$vw_bakery_custom_css .='top: -9em;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Full Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 100%;';
		$vw_bakery_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_opacity_color','0.5');
	if($vw_bakery_theme_lay == '0'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.1'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.1';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.2'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.2';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.3'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.3';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.4'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.4';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.5'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.5';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.6'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.6';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.7'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.7';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.8'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.8';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.9'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.9';
		$vw_bakery_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_content_option','Center');
    if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:13%; right:45%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:23%; right:23%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Right'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:45%; right:13%;';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_bakery_slider_height = get_theme_mod('vw_bakery_slider_height');
	if($vw_bakery_slider_height != false){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='height: '.esc_html($vw_bakery_slider_height).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_blog_layout_option','Default');
    if($vw_bakery_theme_lay == 'Default'){
		$vw_bakery_custom_css .='.post-main-box{';
			$vw_bakery_custom_css .='';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_bakery_custom_css .='text-align:center;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.post-info, .content-bttn{';
			$vw_bakery_custom_css .='margin-top:10px;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.post-info hr{';
			$vw_bakery_custom_css .='margin:15px auto;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_bakery_custom_css .='text-align:Left;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.content-bttn{';
			$vw_bakery_custom_css .='margin:20px 0;';
		$vw_bakery_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_bakery_resp_topbar = get_theme_mod( 'vw_bakery_resp_topbar_hide_show',true);
    if($vw_bakery_resp_topbar == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_topbar == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_stickyheader = get_theme_mod( 'vw_bakery_stickyheader_hide_show',false);
    if($vw_bakery_resp_stickyheader == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_stickyheader == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_slider = get_theme_mod( 'vw_bakery_resp_slider_hide_show',false);
    if($vw_bakery_resp_slider == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_slider == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_metabox = get_theme_mod( 'vw_bakery_metabox_hide_show',true);
    if($vw_bakery_metabox == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.post-info{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_metabox == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.post-info{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_sidebar = get_theme_mod( 'vw_bakery_sidebar_hide_show',true);
    if($vw_bakery_sidebar == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#sidebar{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_sidebar == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#sidebar{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_scroll_top = get_theme_mod( 'vw_bakery_resp_scroll_top_hide_show',true);
    if($vw_bakery_resp_scroll_top == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_scroll_top == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='display:none !important;';
		$vw_bakery_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_bakery_topbar_padding_top_bottom = get_theme_mod('vw_bakery_topbar_padding_top_bottom');
	if($vw_bakery_topbar_padding_top_bottom != false){
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='padding-top: '.esc_html($vw_bakery_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_bakery_topbar_padding_top_bottom).';';
		$vw_bakery_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_bakery_sticky_header_padding = get_theme_mod('vw_bakery_sticky_header_padding');
	if($vw_bakery_sticky_header_padding != false){
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='padding: '.esc_html($vw_bakery_sticky_header_padding).';';
		$vw_bakery_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_bakery_search_font_size = get_theme_mod('vw_bakery_search_font_size');
	if($vw_bakery_search_font_size != false) {
		$vw_bakery_custom_css .='.search-box i{';
			$vw_bakery_custom_css .='font-size: '.esc_html($vw_bakery_search_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_bakery_button_border = get_theme_mod( 'vw_bakery_button_border', false);
	if($vw_bakery_button_border == true){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn{';
			$vw_bakery_custom_css .='border:2px solid; display: inline-block;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_button_padding_top_bottom = get_theme_mod('vw_bakery_button_padding_top_bottom');
	$vw_bakery_button_padding_left_right = get_theme_mod('vw_bakery_button_padding_left_right');
	if($vw_bakery_button_padding_top_bottom != false || $vw_bakery_button_padding_left_right != false){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn, .woocommerce ul.products li.product .button{';
			$vw_bakery_custom_css .='padding-top: '.esc_html($vw_bakery_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_bakery_button_padding_top_bottom).';padding-left: '.esc_html($vw_bakery_button_padding_left_right).';padding-right: '.esc_html($vw_bakery_button_padding_left_right).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_button_border_radius = get_theme_mod('vw_bakery_button_border_radius');
	if($vw_bakery_button_border_radius != false){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn, .woocommerce ul.products li.product .button{';
			$vw_bakery_custom_css .='border-radius: '.esc_html($vw_bakery_button_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_bakery_copyright_alingment = get_theme_mod('vw_bakery_copyright_alingment');
	if($vw_bakery_copyright_alingment != false){
		$vw_bakery_custom_css .='.copyright p{';
			$vw_bakery_custom_css .='text-align: '.esc_html($vw_bakery_copyright_alingment).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_copyright_padding_top_bottom = get_theme_mod('vw_bakery_copyright_padding_top_bottom');
	if($vw_bakery_copyright_padding_top_bottom != false){
		$vw_bakery_custom_css .='#footer-2{';
			$vw_bakery_custom_css .='padding-top: '.esc_html($vw_bakery_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_bakery_copyright_padding_top_bottom).';';
		$vw_bakery_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_bakery_scroll_to_top_font_size = get_theme_mod('vw_bakery_scroll_to_top_font_size');
	if($vw_bakery_scroll_to_top_font_size != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='font-size: '.esc_html($vw_bakery_scroll_to_top_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_padding = get_theme_mod('vw_bakery_scroll_to_top_padding');
	$vw_bakery_scroll_to_top_padding = get_theme_mod('vw_bakery_scroll_to_top_padding');
	if($vw_bakery_scroll_to_top_padding != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='padding-top: '.esc_html($vw_bakery_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_bakery_scroll_to_top_padding).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_width = get_theme_mod('vw_bakery_scroll_to_top_width');
	if($vw_bakery_scroll_to_top_width != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='width: '.esc_html($vw_bakery_scroll_to_top_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_height = get_theme_mod('vw_bakery_scroll_to_top_height');
	if($vw_bakery_scroll_to_top_height != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='height: '.esc_html($vw_bakery_scroll_to_top_height).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_border_radius = get_theme_mod('vw_bakery_scroll_to_top_border_radius');
	if($vw_bakery_scroll_to_top_border_radius != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='border-radius: '.esc_html($vw_bakery_scroll_to_top_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_bakery_social_icon_font_size = get_theme_mod('vw_bakery_social_icon_font_size');
	if($vw_bakery_social_icon_font_size != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='font-size: '.esc_html($vw_bakery_social_icon_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_padding = get_theme_mod('vw_bakery_social_icon_padding');
	if($vw_bakery_social_icon_padding != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='padding: '.esc_html($vw_bakery_social_icon_padding).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_width = get_theme_mod('vw_bakery_social_icon_width');
	if($vw_bakery_social_icon_width != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='width: '.esc_html($vw_bakery_social_icon_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_height = get_theme_mod('vw_bakery_social_icon_height');
	if($vw_bakery_social_icon_height != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='height: '.esc_html($vw_bakery_social_icon_height).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_border_radius = get_theme_mod('vw_bakery_social_icon_border_radius');
	if($vw_bakery_social_icon_border_radius != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='border-radius: '.esc_html($vw_bakery_social_icon_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}