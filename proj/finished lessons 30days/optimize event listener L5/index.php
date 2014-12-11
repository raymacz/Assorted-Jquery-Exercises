<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>jQuery Events 201</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<dl>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
</dl>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>

(function() {
	
	$('dd').filter(':nth-child(n+6)').addClass('hide');
	//$('dd').filter(':nth-child(n)').addClass('hide');
	//$('dd:nth-child(n+6)').addClass('hide');
 console.log($('dd'));
	$('dl').on('mouseenter', 'dt', function() { 
	//use 'dl' and child 'dt' so there is only one event listener to optimize performance rather than hundreds of event listeners
		$(this)
			.next()
				.slideDown(200) // show animation
				.siblings('dd')
					.slideUp(200); //hide animation
					 //console.log(dataz);
	});
})();


</script>

</body>
</html>










