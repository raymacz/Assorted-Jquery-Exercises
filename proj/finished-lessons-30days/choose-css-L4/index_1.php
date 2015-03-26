<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>jQuery Events</title>
	<link rel="stylesheet" href="day.css">
</head>
<body>

<h1>My Website</h1>

<button data-file="day">Day</button>
<button data-file="night">Night</button>
<button data-file="noon">Noon</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>

(function() {
	var link = $('link');
	//$.attr(), $.data(), .siblings(), .removeAttr(), .end(), .on()
	//$('button').click(function() {
	$('button').on('click', function() {
		var $this = $(this),
			stylesheet = $this.data('file');
			//stylesheet = $this.attr('data-file');
		//	console.log(stylesheet);
		link.attr('href', stylesheet + '.css');
			//console.log(link.attr('href'));
		//$this.siblings('button').removeAttr('disabled')
		$this.siblings('button').removeAttr('disabled')
				.end().attr('disabled', 'disabled');
				//.end().attr('disabled', 'disabled');
		console.log($this.siblings('button'));
               // console.log($this.siblings('button').attr('disabled'));
		//put end() since .attr('disabled') is referring to .siblings('button') and not $this.
		//end means stop pointing at the selector which is siblings.
	});
})();

</script>



</body>
</html>