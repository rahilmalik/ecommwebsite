<?php

	$vw_bakery_first_color = get_theme_mod('vw_bakery_first_color');

	$vw_bakery_custom_css = '';

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale, #comments input[type="submit"].submit, #sidebar input[type="submit"], #footer-2, .pagination .current, .pagination a:hover, #comments a.comment-reply-link, #sidebar .tagcloud a:hover, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, #header,
			#sidebar .custom-social-icons i, .scrollup i{';
			$vw_bakery_custom_css .='background-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='a.content-bttn{';
			$vw_bakery_custom_css .='color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.post-info hr, .main-navigation ul ul{';
			$vw_bakery_custom_css .='border-color: '.esc_html($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='@media screen and (max-width: 720px){
		.page-template-custom-home-page #header{';
			$vw_bakery_custom_css .='background: '.esc_html($vw_bakery_first_color). ';';
		$vw_bakery_custom_css .='} }';
	}

	/*------------ Second highlight color --------------*/

	$vw_bakery_second_color = get_theme_mod('vw_bakery_second_color');

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.more-btn a:hover, .pagination span, .pagination a, input[type="submit"], #comments a.comment-reply-link:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .products li:hover span.onsale, .carousel-control-prev-icon i:hover, .carousel-control-next-icon i:hover, #sidebarcustom-social-icons i:hover, #footer .custom-social-icons i:hover, #footer input[type="submit"], .page-content .read-moresec a.error-btn:hover{';
			$vw_bakery_custom_css .='background-color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#heade-top i, .post-main-box:hover h2 a, .post-main-box:hover a, .main-navigation a:hover, #footer li a:hover, a.rsswidget, .main-navigation ul.sub-menu a:hover, .copyright a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .product_meta a, span.tagged_as a,#sidebar a.custom_read_more:hover, #footer .custom-social-icons i, #footer a.custom_read_more{';
			$vw_bakery_custom_css .='color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.more-btn a:hover, #footer .custom-social-icons i, #footer .custom-social-icons i:hover, .page-content .read-moresec a.error-btn:hover{';
			$vw_bakery_custom_css .='border-color: '.esc_html($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='@media screen and (max-width: 720px){
		.search-box,.toggle-nav{';
			$vw_bakery_custom_css .='background: '.esc_html($vw_bakery_second_color). ';';
		$vw_bakery_custom_css .='} }';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_content_option','Center');
    if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:left; left:13%; right:45%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:23%; right:23%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Right'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:right; left:45%; right:13%;';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_width_option','Full Width');
    if($vw_bakery_theme_lay == 'Boxed'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.page-template-custom-home-page header{';
			$vw_bakery_custom_css .='position: relative;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Wide Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='width: 100%;padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.page-template-custom-home-page header{';
			$vw_bakery_custom_css .='position: relative;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Full Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 100%;';
		$vw_bakery_custom_css .='}';
	}

	/*----- Slider show/hide css ------*/
	$vw_bakery_slider = get_theme_mod( 'vw_bakery_slider_hide_show',false);

	if ($vw_bakery_slider == false) {
		$vw_bakery_custom_css .='.page-template-custom-home-page #header{';
			$vw_bakery_custom_css .='position: static; background-color: #311f15;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.page-template-custom-home-page .nav-header{';
			$vw_bakery_custom_css .='border-bottom: 0;';
		$vw_bakery_custom_css .='}';
	}