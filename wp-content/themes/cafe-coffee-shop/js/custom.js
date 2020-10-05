function cafe_coffee_shop_menu_open_nav() {
	window.cafe_coffee_shop_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function cafe_coffee_shop_menu_close_nav() {
	window.cafe_coffee_shop_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(document).ready(function () {
	window.cafe_coffee_shop_currentfocus=null;
  	cafe_coffee_shop_checkfocusdElement();
	var cafe_coffee_shop_body = document.querySelector('body');
	cafe_coffee_shop_body.addEventListener('keyup', cafe_coffee_shop_check_tab_press);
	var cafe_coffee_shop_gotoHome = false;
	var cafe_coffee_shop_gotoClose = false;
	window.responsiveMenu=false;
 	function cafe_coffee_shop_checkfocusdElement(){
	 	if(window.cafe_coffee_shop_currentfocus=document.activeElement.className){
		 	window.cafe_coffee_shop_currentfocus=document.activeElement.className;
	 	}
 	}
 	function cafe_coffee_shop_check_tab_press(e) {
		"use strict";
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.cafe_coffee_shop_responsiveMenu){
			if (!e.shiftKey) {
				if(cafe_coffee_shop_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				cafe_coffee_shop_gotoHome = true;
			} else {
				cafe_coffee_shop_gotoHome = false;
			}

		}else{

			if(window.cafe_coffee_shop_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.cafe_coffee_shop_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.cafe_coffee_shop_responsiveMenu){
				if(cafe_coffee_shop_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					cafe_coffee_shop_gotoClose = true;
				} else {
					cafe_coffee_shop_gotoClose = false;
				}
			
			}else{

			if(window.cafe_coffee_shop_responsiveMenu){
			}}}}
		}
	 	cafe_coffee_shop_checkfocusdElement();
	}
});