<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Appending Content</title>
	<style>
	article {
		width: 600px;
		margin: auto;
	}
	blockquote.co {
		float: right;
		background: #e3e3e3;
		font-size: 2em;
		width: 35%;
		text-align: center;
	}
	</style>
</head>
<body>


<article>
	<h1>My Awesome Post</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		<span class=co>Hello from JavaScript YES!</span>, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
	</p>
	<p>
		Consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. <span class=co>Hello from JavaScript.</span> sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
	</p>
</article>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>
    
   /// $.find(), $.each(), $.before(), $.insertAfter(), $.closest(), $.prependTo(), $.parent(), $.text()

 //append() - after element, prepend() - before element    after()
	var co = $('article').find('span.co').each(function() {
	//co is used for console.log
	console.log(co);
		var $this = $(this);

	//	$('p').first().before('Hello');
		$('<blockquote></blockquote>', { /// put <> to blockquote for adding object properties
			class: 'co',
			text: $this.text()
		}).prependTo( $this.closest('p') );
		  console.log($this.parent()); // can be alternative for $this.closest('p')
	//assigning attributes to object which is an element tag	
	});
	$('<h2></h2>',{ 
			id: 'test',
			text: 'test TEXT'
		  }).insertAfter($('p').eq(0).prev());
                  
//          $('<caption></caption>', {
//                text: 'This is a caption...',                
//          }).insertAfter('h1').append('<a href="#">Linked</a>').append('<small></small>');
		   //used when creating an element otherwise use after()  insertBefore()
		   // eq() used as a specific element sibling position of the selector
		   // prev() position before the selector
                   // 
                   // 
                      //$.insertAfter()-sibling element, $.append-child element
	console.log($('h2'));

</script>

</body>
</html>










