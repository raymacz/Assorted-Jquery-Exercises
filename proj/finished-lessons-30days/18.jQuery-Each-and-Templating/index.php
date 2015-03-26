<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Each & Templating </title>
	<style>
	p { margin-top: 0;}
        body {width: 400px; margin: 100px auto;}
      
	</style>
</head>
<body>


    
    <a href="http://www.google.com" class="myClass">Click me</a>

<script id="blogTemplatez" type="ray/template">
    <h2> {{title}} </h2>
    <img src={{thumbnail}} alt={{title}}>
                
        
</script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script> -->
    <script src="jquery-1.7.1.js"></script>

<script>

//$.trim; $.each; $.html; .replace; $.append; 

//create object title/thumbnail test.png
// trim & convert from html
// replace template with object
// attach to body

(function() {
   
   var objectP = [{
       'title' : 'PICTURE one',
       'thumbnail' : 'test.png',
   }, {
       'title' : 'PICTURE two',
       'thumbnail' : 'test.png',
   },
   {
       'title' : 'PICTURE three',
       'thumbnail' : 'test.png',
   },
   {
       'title' : 'PICTURE four',
       'thumbnail' : 'test.png',
   },
   ], 
    $template = $.trim($('#blogTemplatez').html());
   // console.log(objectP);
   // console.log($template);

   $('.myClass').on('click',function(e) {
      // console.log('testclass');
       e.preventDefault();
          frag = '';
    $.each(objectP, function(i,el){
         var O_this = this;
              //  console.log(this+i+ ' xxx ' +el);
              frag += $template.replace(/{{title}}/ig,O_this.title)
                                .replace(/{{thumbnail}}/ig,O_this.thumbnail);
                console.log(frag);
    });
    $(document.body).append(frag);
   });
   

})();



</script>

</body>
</html>










