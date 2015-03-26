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
/// $.load; e.preventDefault(); $.attr(); $.on();

(function() { 
    var wrap = $('div.wrap');
    
   $('a').on('click', function(e) {
       var $this = $(this);
       e.preventDefault();
    //   console.log($this.attr('href'));
       var urlz= $this.attr('href');
       wrap.load(urlz + " .container"); 
            
   })
    
})();
//load, getJSON, get, post, getScript..... $.ajax


   ///console.log();
</script>

</body>
</html>










