
/**
 *
 * Simple sticky footer using js (http://blog.gaijindesign.com/jquery-making-sure-your-footer-always-sticks-to-the-bottom-of-the-page/)
 *
 */

$(document).ready(function() {
	var docHeight = $(window).height();
	var footerHeight = $('#footer').height();
	var footerTop = $('#footer').position().top + footerHeight;

	if (footerTop < docHeight) {
		$('#footer').css('margin-top', 35 + (docHeight - footerTop) + 'px');
	}
});