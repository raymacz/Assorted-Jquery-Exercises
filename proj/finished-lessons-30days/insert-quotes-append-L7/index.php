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

     //  console.log($('article').find('span.co'));
	$('article').find('span.co').each(function() {
            var $this = $(this);
            console.log($this);
            $('<blockquote></blockquote>', {
               class: 'co',
               text: $this.text(),
            }).prependTo($this.closest('p'));
            
            
          }
        );
          $('<caption></caption>', {
                text: 'This is a caption...',                
          }).insertAfter('h1').append('<a href="#">Linked</a>').append('<small></small>');
          //$.insertAfter()-sibling element, $.append-child element
          console.log($('caption'));
          console.log($('a'));
        
</script>

</body>
</html>










