/*
 * jQuery text reversing plugin
 * usage: $(selector).reverseText();
 * optional arguments:
 *		min: ignore shorter text strings
 *      max: ignore larger text strings
 * e.g. $(selector).reverseText({ min:5, max:10});
 * You can also apply class="reverse" to any HTML element.
 */
 
(function($) {

	$.fn.reverseText = function(params) {
	
		// override default parameters
		params = $.extend( { min: 0, max: 99999 }, params);
		
		// iterate all elements
		this.each(function() {
		
			var e = $(this);
			var txt = e.text();
			
			if (txt.length >= params.min && txt.length <= params.max) {
			
				// reverse the text
				e.text( txt.split("").reverse().join("") );
			
			}
		
		});
		
		// return jQuery object
		return this;
	
	};

	// auto-run
	$(".reverse").reverseText();
	
})(jQuery);