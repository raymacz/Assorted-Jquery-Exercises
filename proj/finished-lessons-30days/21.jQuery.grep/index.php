<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Mustache</title>
	<style>

      
	</style>
</head>
<body>
   <ul class="tweets">

     <script id="template" type="text/x-handlebars-template" >
         
     </script>
    </ul>    
        <!--  its no longer escape } -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- <script  src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.min.js"></script> -->
<script src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.js"></script>

<script>
// $.grep(); 

(function() { 
   var array1= ['A',1, 'B', 2, 'C', 3],
   ArObj = [ {
          num : 1,
          letter : 'Aa'
   },
   {
          num : 2,
          letter : 'Aa'
   },
   {
          num : 3,
          letter : 'Aa'
   },
   {
          num : 4,
          letter : 'Aa'
   },
   ];
   $.grep(array1, function(val, i) {
       console.log(val);
   });
   $.grep(ArObj, function(xobj, i, invert) {
       console.log(xobj);
   });
   
   
   
})();



</script>

</body>
</html>










