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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

//$.trim; $.each; $.html; .replace; $.append; 

//create object title/thumbnail
// trim & convert to html
// replace template with object
// attach to body

(function() {
    
var content = [ ///nested array
    {   title: "Iconshock",
        thumbnail: "http://www.iconshock.com/img_jpg/BETA/communications/jpg/256/thumbnail_icon.jpg",
    },
    {
        title: 'dreamstime',
        thumbnail: 'http://thumbs.dreamstime.com/x/abstract-thumbnail-icon-18097953.jpg',
    },
    {
        title: 'salonelena',
        thumbnail: 'http://www.salonelena.ro/wp-content/uploads/2012/11/media.png',
    }
],
    template= $.trim($('#blogTemplatez').html()),
    frag= '';
  //console.log(template);
  
  $.each(content, function (index,obj) { /// index,
      
      frag += template.replace(/{{title}}/ig, obj.title) /// i - any case, g - multiple occurences
                      .replace(/{{thumbnail}}/ig, obj.thumbnail)
    //  console.log(index+obj);
    // console.log(temp); 
    
  });
  $(document.body).append(frag);
  
  
})();



</script>

</body>
</html>










