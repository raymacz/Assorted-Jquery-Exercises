<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>QA.Now</title>
	<style>
	p { margin-top: 0;}
        body {width: 400px; margin: 100px auto;}
      
	</style>
</head>
<body>


    
    <a href="http://www.google.com" class="myClass another_class">Click me</a>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

(function() {
    
 $('a').on('click',function(e) { ///event
    console.log(this.className); /// $(this).attr('class');
    e.preventDefault(); ///prevent from default excution of href url
    console.log($(this).hasClass('another_class')); ///returns boolean if class exists.
 });
  
})();



</script>

</body>
</html>










