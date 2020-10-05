function vw_bakery_menu_open_nav() {
	window.vw_bakery_responsiveMenu=true;
	jQuery(".responsive-menu .sidenav").addClass('show');
}
function vw_bakery_menu_close_nav() {
	window.vw_bakery_responsiveMenu=false;
 	jQuery(".responsive-menu .sidenav").removeClass('show');
}

jQuery(document).ready(function () {
	window.vw_bakery_currentfocus=null;
  	vw_bakery_checkfocusdElement();
	var vw_bakery_body = document.querySelector('body');
	vw_bakery_body.addEventListener('keyup', vw_bakery_check_tab_press);
	var vw_bakery_gotoHome = false;
	var vw_bakery_gotoClose = false;
	window.vw_bakery_responsiveMenu=false;
 	function vw_bakery_checkfocusdElement(){
	 	if(window.vw_bakery_currentfocus=document.activeElement.className){
		 	window.vw_bakery_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_bakery_check_tab_press(e) {
		"use strict";
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_bakery_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_bakery_gotoHome) {
					jQuery( ".responsive-menu .main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_bakery_gotoHome = true;
			} else {
				vw_bakery_gotoHome = false;
			}

		}else{

			if(window.vw_bakery_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_bakery_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_bakery_responsiveMenu){
				if(vw_bakery_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".responsive-menu .main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_bakery_gotoClose = true;
				} else {
					vw_bakery_gotoClose = false;
				}
			
			}else{

			if(window.vw_bakery_responsiveMenu){
			}}}}
		}
	 	vw_bakery_checkfocusdElement();
	}
});

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation: {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

(function( $ ) {

	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})

	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
		scroll = $(window).scrollTop();
		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});

		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});
	
})( jQuery );