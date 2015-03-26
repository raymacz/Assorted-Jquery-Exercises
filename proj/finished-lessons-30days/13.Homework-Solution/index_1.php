<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Animate</title>
	<style>
	p { margin-top: 0;}
        body {width: 400px; margin: 100px auto;}
        .box {
            width: 400px;
            background: red;
            position: relative;
            overflow: hidden;
            padding: 1em;
        }
	</style>
</head>
<body>

<div class="box">
      <h2>Click Me</h2>
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
</div>
    <p><button>FadeSlideToggle</button></p>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

///$().slideDown(500, 'swing') or pass a callback function $().slideDown(500, function() {});
///

(function() {
    var box = $('div.box');
  $.fn.FadeSlideToggle = function(speed, fn) {///fn the reference from an anonymous function
      //console.log('fading and sliding');
       ///fadeToggle= opacity
         ///slideToggle=height
         if ($.isFunction(fn)) { ///.isFunction() is a jquery utility for checking a type if its a function
             console.log('is a function!!!');
         } else {
             console.log('is undefined')
         }
         
      return   $(this).animate({ ///always "return" jquery objects from your custom methods to continue chaining  e.g. .addClass() won't work
            'height': 'toggle',/// using toggle is better than putting 0. it also ignores padding hide problem
            opacity: 'toggle'
//         }, speed || 5000, function() {
//             fn();  /// or
//            }, speed || 5000, fn); ///fn is referencing the function w/o trigger e.g. fn() 
            ///if fn() is placed, it executes without waiting for animate to finish...
          ///if speed is undefined, will use default value
            }, speed || 5000, function() {
                $.isFunction(fn) && fn.call(this); /// && .call() will only run if .isFunction() is true...
            }); 
            
  };
  $('button').on('click', function() {
      //box.FadeSlideToggle(500); 
      box.FadeSlideToggle(2000, function() { //callback function should be referenced on a customized method 
          console.log('finished');
      }); 
      
  })
        
})();



</script>

</body>
</html>










