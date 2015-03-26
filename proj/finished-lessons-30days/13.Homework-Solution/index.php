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
      ///---------------------creating a simple custom JQuery function --------------
      /*
 (function() {
    var box = $('div.box');
     /// always add $.fn. as prefix for custom function name
    $.fn.customFzion = function(speed,fn) { 
         console.log(speed);
        return fn.call(this);
    // fnz.call let function to be completed; pass "this" to return object, if not window object will be returned
    }
 
  $('button').on('click', function() {
       console.log(this + 'test'); // box selector
       box.customFzion(500,function() {
           console.log('DONE...'+ this);
       });
  })
        
})();
      */
</script>

<script>

///$().slideDown(500, 'swing') or pass a callback function $().slideDown(500, function() {});
/// CREATING A CUSTOMIZED METHOD to add in JQuery

(function() { 
    var box = $('div.box');
     
    $.fn.customFzion = function(speed,fnz) {
         console.log(speed+' '+this);
        return $(this).animate({
            'height': 'toggle',
            'opacity': 'toggle',
            'background-color' : 'blue', ///color doesnt work, duno y
            'font-size' : '+=3' 
        }, speed || 2000,'swing', function() {
            console.log(this + ' swingers');
            fnz.call(this); 
        });
   
    }
 
  $('button').on('click', function() {
       console.log(this + 'test'); 
       box.customFzion(500,function() {
           console.log('DONE...'+ this);
       });
  })
        
})();



</script>

</body>
</html>










