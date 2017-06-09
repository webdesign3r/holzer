
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

});

var $document = $(document),
    $element = $('.navbar'),
    navbarDefault = 'navbar-default';
    navbarTransparent = 'navbar-custom';

    fadeInDown = 'fadeInDown';

$document.scroll(function(){
    if ($document.scrollTop() >= 200) {
        $element.addClass(navbarDefault);
        $element.removeClass(navbarTransparent);
        $element.addClass(fadeInDown);
        $("#logo").attr("src", "images/logo_dark.png");
    } else {
        $element.addClass(navbarTransparent);
        $element.removeClass(navbarDefault);
        $element.removeClass(fadeInDown);
        $("#logo").attr("src", "images/logo_white.png");
    }
});