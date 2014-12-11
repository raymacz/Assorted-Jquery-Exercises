
<html>
	<head>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">	 </script>
	  <script type="text/javascript">
	  $(document).ready(function() {
		  $("button").click(function(iii,evt){
			$("li").each(function(ii,xx){
			alert($(this).text()+ii+xx+evt+iii);
			$("li:contains(Milk)").css('background','yellow');
			});
		});
	 });	
	  function xxx (xx, evt) {
	
		}
 
	 </script>
	
	  <style type="text/css">
		.done {
			text-decoration: line-through;
		}
	 </style>
	</head>
	<body>
		
	<button>Alert the value of each list item</button>

	<ul>
		<li>Coffee</li>
		<li>Milk</li>
		<li>Soda</li>
	</ul>

	</body>
</html>


