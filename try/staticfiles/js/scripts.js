/*!
* Start Bootstrap - Agency v7.0.10 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
//
(function($) {
	'use strict';

	jQuery(document).on('ready', function(){

			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});

	});


})(jQuery);

window.addEventListener("resize",function(event){
    const navbarCollapsible = document.body.querySelector('#mainNav');
    const imglogo = document.body.querySelector('#imglogo');
    //const carrousel_img = document.body.querySelector("#crs_img");
    if ($(window).width() < 980){
        navbarCollapsible.classList.remove('navbar-expand');
        navbarCollapsible.classList.remove('navbar-shrink');
        imglogo.classList.add('w-60')
        //carrousel_img.classList.remove('w-100');
    }
    else{
        navbarCollapsible.classList.add('navbar-shrink');
        //carrousel_img.classList.add('w-100');
    }
},true);
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        const imglogo = document.body.querySelector('#imglogo');
        if (!navbarCollapsible) {
            return;
        }
        if ($(window).width() > 980){
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
            navbarCollapsible.classList.add('navbar-expand');
            imglogo.classList.add("w-60");
            /*if ($(window).width() < 980){
                navbarCollapsible.classList.remove('navbar-expand');
            }*/

        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            navbarCollapsible.classList.remove('navbar-expand');
            imglogo.classList.remove("w-60");
            /*if ($(window).width() < 980){
                imglogo.classList.add('w-60')
                navbarCollapsible.classList.remove('navbar-shrink');
            }*/
        }
        }else {
            navbarCollapsible.classList.remove('navbar-expand');
            navbarCollapsible.classList.remove('navbar-shrink');
        }
    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('.nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
});

