<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Custom Event & Observer Pattern</title>
	<style>

      
	</style>
</head>
<body>
    <h1>Hi There</h1>
        <!--  its no longer escape } -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- <script  src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.min.js"></script> -->
<script src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.js"></script>

<script>
///make APi

(function($) {  /// "$" will always refer to jQuery
//jquery
var o = $({}); ///pass empty object to jquery ///o is object
  //  console.dir(o); ///new instance of jQuery that has access to all methods
    $.each( {
        trigger: 'publish',
        on: 'subscribe',
        off: 'unsubscribe',
    }, function(key, val) {
        jQuery[val] = function() { ///array notation
            o[key].apply(o, arguments); 
            ///.apply() values will be sent as an array ///.call() values will be sent explicitely
                                           
        };
        ///$('#container')['addClass'] is similar $('#container').addClass
    });

})(jQuery);/// "$" represents jQuery function

/*
$.subscribe();

$.getJSON('https://search.twitter.com/search.json?q=dogs&callback=?', function(data){///'https://search.twitter.com/search.json?q=dogs&callback=?'
    //console.log(data);
    data = results; ///.getJSON : asynchronous - means executes reading w/o waiting... not sync
    $(document).trigger('twitter/results', results); ///starts trigger 
    ///publish
});

//   $('body').on('clickityClack', function() {
//      console.log('body clicked');
//   });
//   
//   //...
//   $('body').trigger('clickityClack'); ///unique name for custom events



$(document).on('twitter/results', function(e, results){/// event,result
    ///subscribe
    console.log(results);
}); ///executed after trigger
*/

$.getJSON('http://search.twitter.com/search.json?q=dogs&callback=?', function(data){///
   $.publish('twitter/results', results);
   });
  
$.subscribe('twitter/results', function(e, results) {
   /// console.log(results);
   $.('body').html(
      $.map(results.results,function(obj,index) {
          ///.map vs .each ///.map usually modify an array or objects
          return '<li>' + obj.text; + '</li>';
      }).join('')
    );

});

   ///console.log();


/***  unfinished  16:05 ***/

</script>

</body>
</html>










