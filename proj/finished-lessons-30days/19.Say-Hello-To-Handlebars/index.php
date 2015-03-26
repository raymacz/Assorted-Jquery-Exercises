<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Mustache</title>
	<style>
          h2 span { color:gray; font-size: .8em;}
      
	</style>
</head>
<body>
   <ul class="tweets">
     <!-- referring to the array (context)  -->
     <script id="template" type="text/x-handlebars-template" >
         {{#each this}}  
         <li>
              
                 <h2>{{#if twerk}} - <span>{{twerk}}</span>{{/if}}</h2> 
                     <!-- if age exist, put <span> -->
                     
               <h2>{{fullName author}}</h2> 
            
              
              <p>{{{tweet}}}</p> 
                  {{#unless quote}} <!--if no quote, add <h5> "unless" argument is common in ruby -->
                        <!--  <h5>{{fullName author}} has no quote!</h5> -->
                            <h5>{{fullName author}} has no quote!</h5>
                  {{/unless}}
                          {{#if quote}}
                                  <h5 class="seek"> {{quote}} </h5>
                          {{else}}
                                  <h5 class="weed"> Author quote is none... </h5>
                          {{/if}}
         </li>
        {{/each}} 
     </script>
    </ul>    
        <!--  its no longer escape } -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- <script  src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.min.js"></script> -->
<script src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.js"></script>

<script>
//$(document).ready(function() {}) ///better used inside <head> & all HTML is already loaded before its used.
//if scripts are used below the target HTML, u dont need to use $(document).ready()
//always imports scripts at bottom when possible.

(function() { 
   var context= [
       { ///array of objects
        author: {first: 'Jeffrey ', last: 'Way', age: 27},
        tweet: '30 Days to Learn jQuery Rocks',
        quote:'never ever ever ever give up...',
        twerk:'test'
        },
        {
       author: {first: 'John ', last: 'Doe', age: 45},
       tweet: '<strong> 30 Days </strong> to Learn jQuery Rocks',

        }
    ];
    
    Handlebars.registerHelper('fullName', function(author) { //"author" becomes an object containing "first" & "last"
        return author.first + ' ' + author.last + ' - ' + author.age;
    }); /*created a new helper from handlebars */
    

    
   var template = Handlebars.compile( $('#template').html()); //receive to where html template string is stored...
   //console.log(template);   //if empty returns the function format which is function (context,options)
   var temp = template(context);
  //console.log(temp); //returns html
 //  $(document.body).append(temp); //// attachto body
  $('ul.tweets').append(temp);
  console.log(temp); /// ul.tweets is placed outside the <script> & li is inside ready for append



})();



</script>

</body>
</html>










