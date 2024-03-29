<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_startup_first_color = get_theme_mod('vw_startup_first_color');

	$custom_css = '';

	if($vw_startup_first_color != false){
		$custom_css .='.search-box i, #header .nav ul.sub-menu li a:hover, .req-button a, .more-btn a, .overlay-box:hover, input[type="submit"], .footer .tagcloud a:hover, .footer-2, .scrollup i, .sidebar input[type="submit"], .sidebar .tagcloud a:hover, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, .hvr-sweep-to-right:before, .pagination span, .pagination a{';
			$custom_css .='background-color: '.esc_html($vw_startup_first_color).';';
		$custom_css .='}';
	}
	if($vw_startup_first_color != false){
		$custom_css .='#comments input[type="submit"].submit, .sidebar ul li::before{';
			$custom_css .='background-color: '.esc_html($vw_startup_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_startup_first_color != false){
		$custom_css .='a, .top-bar .custom-social-icons i:hover, .contact-info i, #header .nav ul li a:hover, .footer h3, .sidebar th, .sidebar td, .sidebar td#prev a, .sidebar caption, .post-info i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .woocommerce-message::before{';
			$custom_css .='color: '.esc_html($vw_startup_first_color).';';
		$custom_css .='}';
	}
	if($vw_startup_first_color != false){
		$custom_css .='.post-main-box:hover{';
			$custom_css .='border-color: '.esc_html($vw_startup_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_startup_first_color != false){
		$custom_css .='.woocommerce-message{';
			$custom_css .='border-top-color: '.esc_html($vw_startup_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_startup_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_startup_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_startup_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}