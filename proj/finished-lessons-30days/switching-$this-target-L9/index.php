<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>The this Keyword</title>
</head>
<body>


<a href="http://tutsplus.com">Click Me</a><br />

<a id="test1" href="#">Click More</a><br />
<a id="test2" href="http://tutsplus.com">Click More</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
console.log(this);

var obj = {
	doIt: function(e) {
		console.log(this);
		console.log(e);
		e.preventDefault();
	}
}

//$('a').on( 'click', $.proxy(obj.doIt, obj));
$('a').on( 'click', $.proxy(obj.doIt, $('a')));
///use $.proxy(obj.method, obj)1st is the method, 2nd arg to pass --> is it going to refer to $.this, the object to target.

// $('a').on('click', function(e) {
// 	// this = anchor that was clicked
// 	obj.doIt.call(this);

// 	e.preventDefault();
// });

//-----------rbtm notes
(function (){
		console.log(this);
})();
// this above by wrapping () the function(){} and placing () at the autoexecutes a function  ---> using anonymous function
// start by placing a couple of jquery inside it to make it work.

//otherwise it won't execute & u need to call it and place a function name like 'x',(also not to make it anonymous)
function x(evt){
	console.log(this);
	console.log(evt);
}
x();

$('a#test1').on('click',x);
$('a#test2').on('click',function(evt){
	evt.preventDefault();
	//console.log(this);
	//console.log(evt);
	obj.doIt.call(this, evt);
 //.apply(thisArg,argArray1)  can be used to replace call if using array

});
// if any of these are clicked it will call 2-functions. & one is obj.doIt function since its $('a')
// can do #test1 -->> 'x' function @test2 -->> anonymous function
//  .preventDefault(); prevent going to other link
</script>

</body>
</html>










