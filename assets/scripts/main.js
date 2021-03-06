/**
 * All sorts javascript/jQuery functions go here
 *
 * @author      Local Marketing Inc.
 * @version     3.1
 * @since       wpseed 0.12
 *
 */


/* Functions
/===================================================== */

/* Hamburger switch
/------------------------*/
$(function(){
	$(document).on('click', '#hamburger', function (event) {
    // show overlay
    $('#nav_main').toggleClass('hiddenmobile');
    // switch icon
    $('#hamburger').toggleClass('is-active');
    // prevent content scrolling
    $('html').toggleClass('noscroll');
});
});