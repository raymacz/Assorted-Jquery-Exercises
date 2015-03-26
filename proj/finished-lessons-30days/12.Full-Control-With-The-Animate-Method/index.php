<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Animate</title>
	<style>
	/*body { width: 400px; margin: 100px auto; }

	.box {
    font-size: 7px;
		width: 400px;
		background: red;
		position: relative;
		overflow: hidden;
		padding: 1em;
	}  */

  .box {
    width: 400px;
    background: red;
    padding: 2em;
    position: relative;
    -webkit-transition: border-radius 2s; ///animate on css
    -moz-transition: border-radius 2s;  ///animate on css
    
  }
  .rounded {
    border-radius: 50px;
  }
	</style>
</head>
<body>


<div class="box">
	<h2>Hi There</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>

<p><button id="boxadd">Add</button><button id="boxtest">xxx</button></p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
            

/*
( function() {
      var $box=$('div.box')
      var fontSize = parseInt( $box.css('font-size'), 10);

      console.log($box);

    $('button#boxadd').on('click', function(){
	//	$box.css('font-size', fontSize += 2); // old syntax
    $box.css('font-size', '+=2'); // new syntax
		if ($('button#boxm').length<1) {
			$('<button id="boxm">Shrink Font</button>').insertAfter('button#boxadd');
		};
		//console.log($(this));



	});

  // still on testing ----xxxxx
		 $('button#boxm').on('click', function(){
        // $box.css('font-size', fontSize -= 2);
          $box.css('font-size', '-=2');
		   //console.log($(this));
    });
	// weird #boxm doesn't work.. probably because object was not properly made.
  // still on testing ----xxxxx

	$('button#boxtest').on('click', function(){
      //  $box.css('font-size', fontSize -= 2);  //old syntax
      $box.animate({
		'font-size': '-=2',
		'color': 'white',
		'width': '+=5'
	  }, {
      step: function() {
        console.log($(this).css('fontSize'));
      },
      duration: 3000,
      complete: function(){
        console.log('completed');
      }

      }, 'linear')
      .animate({
        'top': 100
      }, {
        duration: 2000,
        queue: false
      }); // new syntax
		console.log($(this));
    });


}) ();
*/
// centering on whole webpage
   //    $.animate(); $.on(); $.addClass();  

(function(){
     
  var box = $('div.box'),
      w = $(window).width()/2 - box.outerWidth()/2,
      h = $(window).height()/2 - box.outerHeight()/2 
      ///deduct outerHeight (padding+height) since its based on top
console.log(box.outerHeight());
  $('button#boxadd').on('click',function(){
    box.animate({
      'left': w,
      'top' : h,
      'position' : 'absolute', //CSS properties
    //  'font-size' : '+=3px',
    //  'background-color' : 'black', ///doesnt work with colors & no idea why
    },'slow','swing')
	.animate({
	'top' : h,
    },{ duration: 200, queue:false})//,'linear' ///swing effect on speed
    ///setting it to false makes the animation execute at the same time by not waiting the previous .animate to finish
  .addClass('rounded');
  })


})()


</script>
</body>
</html>