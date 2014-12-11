/*
	jQuery tab handling plugin
	By Craig Buckler
	http://craigbuckler.com/
	http://optimalworks.net/
*/

(function($) {

	$.fn.Tabs = function(opts) {

		// default configuration
		var config = $.extend({}, {
			activeClass: "active"
		}, opts);


		// click event handler
		function ClickTab(e) {
			ActivateTab(e.target);
			return false;
		}


		// activate tab
		function ActivateTab(a) {
			var $a = $(a);
			var ul = $a.closest("ul");
			var active = ul.data("active");
			if (a != active) {

				// hide previously active tab
				if (active) {
					$(active).removeClass(config.activeClass);
					var $c = $(active.hash);
					ul.data("height", Math.max(ul.data("height"), $c.height()));
					$c.css("display", "none");
				}

				// show active tab
				$a.addClass(config.activeClass);
				$(a.hash).css({ "display":"block", "minHeight":ul.data("height")+"px" });
				ul.data("active", a);
			}
		}


		// tab initialisation
		this.each(function() {

			var ul = $(this);				// list element
			ul.data("height", 0);
			var pActive = location.hash;	// currently active tab

			// parse individual tabs
			var $a = $("a", ul), active = null;
			$a.each(function() {
				var hash = this.hash;
				var content = $(hash);
				ul.data("height", Math.max(ul.data("height"), content.height()));
				content.css("display", "none");
				if (!active || hash == pActive) active = this;
			});

			// activate first or active tab
			ActivateTab(active);

			// click tab event handler
			$a.click(ClickTab);

		});

		return this;
	};

	// initialise all tabs
	$(function() {
		$("ul.tabset").Tabs();
	});

})(jQuery);