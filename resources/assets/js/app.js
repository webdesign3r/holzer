
/**
    * First we will load all of this project's JavaScript dependencies which
    * includes Vue and other libraries. It is a great starting point when
    * building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');

/**
    * Next, we will create a fresh Vue application instance and attach it to
    * the page. Then, you may begin adding components to this application
    * or customize the JavaScript scaffolding to fit your unique needs.
*/

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function () {

	var $item = $('.carousel .item'); 
	var $wHeight = $(window).height()-(($(window).height()/100)*0);
	$item.eq(0).addClass('active');
	$item.height($wHeight); 
	$item.addClass('full-screen');

	$('.carousel img').each(function() {
		var $src = $(this).attr('src');
		$(this).parent().css({
			'background-image' : 'url(' + $src + ')',
		});
		$(this).remove();
	});

	$(window).on('resize', function (){
		$wHeight = $(window).height();
		$item.height($wHeight);
	});

	$('.carousel').carousel({
		interval: 9000,
		pause: "false"
	});

});

// var $document = $(document),
//     $element = $('.navbar'),
//     navbarDefault = 'navbar-custom';
//     navbarTransparent = 'navbar-transparent';

//     fadeInDown = 'fadeInDown';

// $document.scroll(function(){
//     if ($document.scrollTop() >= 200) {
//         $element.addClass(navbarDefault);
//         $element.removeClass(navbarTransparent);
//         $element.addClass(fadeInDown);
//         $("#logo").attr("src", "/storage/{{ Voyager::setting('logo_dunkel') }}");
//     } else {
//         $element.addClass(navbarTransparent);
//         $element.removeClass(navbarDefault);
//         $element.removeClass(fadeInDown);
//         $("#logo").attr("src", "/storage/{{ Voyager::setting('logo_hell') }}");
//     }
// });
