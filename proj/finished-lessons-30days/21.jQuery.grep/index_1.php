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
//

(function() { 
   var arr = [1,2,3,4,5,6,7,8,9,10];
   arr= $.grep(arr, function(val, index) { ///$.grep() returns array w/ filtered value 
       //return #s > 5
           return val > 5; //returns values > 5 
   }, true); //if true, inverts value
    console.log(arr);
   var arr2 = [
       {
           first: 'Jeffrey',
           last: 'Way'
       },
       {
           first: 'icee',
           last: 'maquiso'
       },
       {
           first: 'Allison',
           last: 'Way'
       },
       {
           first: 'vas',
           last: 'maquiso'
       },
       {
           first: 'nico',
           last: 'maquiso'
       },
   ];  
   arr2=$.grep(arr2,function(obj,index){
       return obj.last === "maquiso";
   })
   console.log(arr2);
})();



</script>

</body>
</html>










