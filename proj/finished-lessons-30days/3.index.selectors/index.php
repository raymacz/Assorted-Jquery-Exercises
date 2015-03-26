<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<style>
	li {color:black;}
	.container { color: green;}
	.emphasis {color:blue;}
	</style>
</head>
<body>

<div class="container">
	<h1>Welcome to My Website </h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.
	</p>

	<div class="container boterz">
		<ul class="container emphasis">
			<li>item</li>
			<li>item 2</li>
			<li>item 2</li>
			<li>item 4</li>
			<li>item 5</li>
			<li>
				<ul>
					<li>hello from the nest.</li>
				</ul>

			</li>
		</ul>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>

<script>
       // $('ul.emphasis').children('li:nth-child(2)').text('Added with jQuery'); 
    ///  console.log($('ul.emphasis').children('li').eq(3));
     
      
      
	//$('ul.emphasis').children('li').css('color','red'); 
	//$('ul.emphasis > li').css('color','red');
	//$('ul.emphasis li').css('color','red');
	//$('ul.emphasis').find('li').css('color','red');
	//$('ul.emphasis').children('li').first().css('color','red'); 
	//$('ul.emphasis').children('li:first').addClass('emphasis'); 
	//$('ul.emphasis').children('li:nth-child(2)').text('Added with jQuery'); 
	//$('ul.emphasis').children('li').eq(3).next().prev().css('background','green'); 
	//$('li').parent().removeClass('emphasis');
	//$('li').parentsUntil().removeClass('boterz');
	//$('li').closest('div.container').removeClass('boterz');
	
	//console.log($('ul').parents('.container'));
        // console.log($('ul').closest('.container'));
	//console.log($('li').parentsUntil('body'));
	//console.log($('li').parents());
      
</script>

</body>
</html>






