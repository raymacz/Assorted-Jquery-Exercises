<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>jQuery Events</title>
	<link rel="stylesheet" href="day.css">
</head>
<body>

<h1>My Website</h1>

<button id="dayz" data-file="day">Day</button>
<button id="nightz" data-file="night">Night</button>
<button data-file="noon">Noon</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>
//$.attr(), $.data(), .siblings(), .removeAttr(), .end(), .on()
        
(function() {
        link = $('link')
	
     
         console.log(link);
       $('button').on('click', function() {
              $this = $(this);
          // $('link').attr('href',$this.attr('data-file'));
          stylesheet = $this.data('file');
          link.attr('href',stylesheet+'.css');
          $this.attr('disabled','disabled').siblings('button').removeAttr('disabled');
       })
       
       
       
       
       
   })();

</script>



</body>
</html>