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
///{}=object []=array 
///$.addClass(); $.extend(); $.insertAfter(); $.on(); $.text(); $.call(); $.prependTo(); $.find(); $.length; $.is();
/// $.fadeToggle(); $.slideToggle(); var X = {init: function() {}}

///$.customfunction.call(); $.property;


$('body').addClass('js');


var ContactFormz = {

	///container
        cform: $('#contact'),

	///config
        config: {
            speedz:2000,
            effectz: 'slideToggle',
        },
        
        ///initialize
         initz: function(objx) {
             var $this = ContactFormz.cform;
         
             //  $this.css('display','block');
                 $.extend(this.config, objx);
                 console.log(this.config + ' vs ' + objx);
              //  ContactFormz.showz(); /// $this will not work since .showz() is not a property of $('#contact') but ContactFormz only
                $('article:eq(0)').append('<button>Click Me</button>').find('button').on('click',function(){
                    ContactFormz.showz();
                });
                  //  console.log($('article:eq(0)'));
            
         },

	///show
        showz: function() {
             var $this = ContactFormz.cform,
                 CF_config = ContactFormz.config;
             console.log($this);
           
           if ($this.css('display','none')) {
           
             $this[CF_config.effectz](CF_config.speedz);
                // $('#contact')[.slidetoggle](1000);
             this.close.call($this); // use $.call() to pass (this) on an anonymous function
         };
         
        },

	/// close
        
        close: function() {
             var // $this = $(this);//passed by scope .call($this) /// $('#contact)
                 $this = this;
               // $this = this.cform;
              CF_config = ContactFormz.config;
             console.log( $this +' debugz1');
             if ($this.find('.close').length) return; //check if button exist
            console.log( $this.find('H2')+' debugz2');
            $('<button class="close">X</button>').insertAfter($this.find('h2')).on('click',function(){
                 //  $this.css('display','none');
                 $this[CF_config.effectz](CF_config.speedz);
                });
        }
        
        
     //  console.log(this);
     //  console.log($this.find('span.close').length+' debugz');
	
};

///custom settings
//ContactFormz.initz();
ContactFormz.initz({
      speedz : 3000,
      effectz : 'fadeToggle'
});

})();


</script>

</body>
</html>










