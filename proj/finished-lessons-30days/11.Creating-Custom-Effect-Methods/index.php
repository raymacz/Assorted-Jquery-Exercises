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

<h1>Click Me</h1>

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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
    
  ///search for slideDown in https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js
/// find slideDown  & copy
/// jQuery.fn[ name ] = function( speed, easing, callback ) {
//		return this.animate( props, speed, easing, callback );
//	};
/// u can change name with any like jQuery.fn.flash

(function() {
  
   var  $content_hide = $('div.content').hide(),
       $h1 = $('h1');
       jQuery.fn.kapeezh = function(speed, slide, easing, callback ) {///removed props to pass speed
             var $this= this;
                  console.log(this);
		return this.slideDown(slide, function() { 
                    console.log(this);
                    console.log($this);
                    console.log(speed + ' speed vs slide ' + slide);
                    $this.delay(speed).slideUp(1000);
                });
	};

    $h1.on('click', function() {
       $content_hide.kapeezh(2000, 500);
       // console.log('debugz');
    })
    

  
/*
 jQuery.fn.flashz = function( speed, easing, callback ) {
      console.log(this);
      var $this=$(this);
      return $(this).slideDown(500,function(){
        $this.delay(speed).slideUp(3000);
      });
		//return this.animate( props, speed, easing, callback );
	};
 $('div.content').hide();
 $('h1').on('click', function() {
  //$(this).next().flash();
  $(this).next('div.content').flashz(5000);
  ////placing an element like <br /> or <label /> on next element doesn't work even if 'div.content' is placed
 })
*/

})();



</script>

</body>
</html>










