<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Slides and Structure</title>
	<style>

	body {
		width: 600px;
		margin: auto;
		font-family: sans-serif;
	}

	#contact {
		background: #e3e3e3;
		padding: 1em 2em;
		position: relative;
	}

	.js #contact {
		position: absolute;
		top: 0;
		width: inherit;
		display: none;
	}

	#contact h2 { margin-top: 0; }

	#contact ul { padding: 0; }

	#contact li {
		list-style: none;
		margin-bottom: 1em;
	}

	/* Close button on form */
	.close {
		position: absolute;
		right: 10px;
		top: 10px;
		font-weight: bold;
		font-family: sans-serif;
		cursor: pointer;
	}

	/* Form inputs */
	input, textarea { width: 100%; line-height: 2em;}
	input[type=submit] { width: auto;  }
	label { display: block; text-align: left; }

	</style>
</head>
<body>


<article>
	<h1>My Awesome Post</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</p>
</article>

<div id="contact">
	<h2>Contact Me</h2>
	<form action="#">
		<ul>
			<li>
				<label for="name">Name: </label>
	 			<input name="name" id="name">
			</li>

			<li>
				<label for="email">Email Address: </label>
		 		<input name="email" id="email">
			</li>

			<li>
				<label for="comments">What's Up?</label>
				<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
			</li>
			<li>
				<input type="submit" value="Submit">
			</li>
		</ul>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>

(function() {


$('html').addClass('js');

var contactFormz = {

	containerz: $('#contact'),

	config: {
		effectz: 'slideToggle',
		speed: 1000
	},

	initz: function(xconfig) {
		$.extend(this.config, xconfig);
		// the extend() function overrides the target object with its attributes
		$('<button></button>', {
			text: 'Contact Me'
		})
			.insertAfter( 'article:first' )
			.on( 'click', this.showz );
	},

	showz: function() {
		var cf = contactFormz,
			containerz = cf.containerz,
			config = cf.config;

		if ( containerz.is(':hidden') ) {

			// the call() javascript function tells what argument to pass...
			containerz[config.effectz](config.speed);
			contactFormz.close.call(containerz);
		}
	},

	close: function() {
		var $this = $(this), // #contact
			config = contactFormz.config;

		if ( $this.find('span.close').length ) return;
			//exits function if span.close is found to avoid adding an element
		$('<span class=close>X</span>')
			.prependTo(this)

			.on('click', function() {
				// this = span
				$this[config.effectz](config.speed);
			})
       console.log(this);
	}
};

contactFormz.initz({  // user can configure the settings
	 effectz: 'fadeToggle',
	speed: 2500
});

})();

</script>

</body>
</html>










