<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>AJAX: Load Method index</title>
	<style>

      
	</style>
</head>
<body>
   
    <a href="about.html"> Learn more About Me </a>
    <br>
    <a href="contact.html">Contact Me</a>
    
     <div class="wrap"></div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script>
///

(function() { 
    var wrap = $('div.wrap');
    $('a').on('click', function(e) {
        var href= $(this).attr('href');
      //   $('body').load('about.html .container' );  
      //  $('body').load(href + ' .container' );  
       wrap.load(href + ' .container' );  
        e.preventDefault();
    })
    
})();
//load, getJSON, get, post, getScript..... $.ajax


   ///console.log();
</script>

</body>
</html>










