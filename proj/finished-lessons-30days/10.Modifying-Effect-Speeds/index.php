<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Custom Effect Methods</title>
	<style>
	p { margin-top: 0;}
	</style>
</head>
<body>


<h1>Reveal</h1>
<div class=content>
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>

<?php //https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js
//https://developers.google.com/speed/libraries/devguide#jquery?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

/// $.hide(); $.on(); $.next(); $.slideDown(); $.delay(); $.slideUP();
// $.fx.speeds._default = 2000;



$.fx.speeds.snail=10000;
console.log($.fx.speeds); 
(function() {
    $('div.content').hide();
    $('h1').on('click', function() {
       var $msg = $('div.content');
       $msg.slideDown('snail');
    });
    

})();

</script>

</body>
</html>










