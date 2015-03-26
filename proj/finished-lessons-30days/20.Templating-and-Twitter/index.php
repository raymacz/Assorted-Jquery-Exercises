<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Mustache</title>
	<style>
           body {width: 600px; margin: auto;}
           ul {list-style: none;}
           li {padding-bottom: 1em;}
           img {float: left; padding-right: 1em;}
           a {text-decoration: none; color: #333; }
	</style>
</head>
<body>
   <ul class="tweets">
    <script id="tweets-template" type="text/x-handlebars-template" >
        {{#each this}}
        <li>
            <img src="{{thumb}}" alt ="{{author}}";
             <p><a href="{{url}}"> {{tweet}}</a></p>
        </li>
        {{/each}}
    </script>

    </ul>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="https://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.rc.1.js"></script>

<script>
//http://christianvarga.com/how-to-get-public-feeds-using-twitters-v1-1-api/
(function() { 
   
   var Twitter = {
       init:function(config) {
            this.url =''; ///'http://search.twitter.com/search.json?q='+ config.query +'&callback=?'; ///anonymous function for callback will be triggered
            this.template = config.template;
            this.container = config.container;
            this.fetch();
         //  console.log('after fetch call'); ///executes first before it calls the callback since its asynchronous request
       ///  $.when(ajaxRequest).then(dothis)
       
       },
      attachTemplate: function () {
         //console.log(this.tweets);
         var template = Handlebars.compile($(this.template));
         this.container.append(template(this.tweets));
         console.log(html);
      }, 
       
      fetch: function() {
          var self=this;
          console.log(this.url);
          $.getJSON(this.url, function(data) {
              //console.log(data.results);
            //  console.log('JSON callback'); 
           self.tweets = $.map(data.results) function( tweet ) {
                  ///filter
                  return {
                    author:  tweet.from_user,
                    tweet: tweet.text,
                    thumb: tweet.profile_image_url,
                    url: 'http://twitter.com/' + tweet.from_user + '/status/' + tweet.id_str
                  };
          });
          console.log(self.tweets);
          
          //self.tweets
          self.attachTemplate(this.template);
      });
     }
   };
   
   Twitter.init({
       template: $('#tweets-template').html(),
       container: $('ul.tweets'),
       query: 'Justin Bieber'  
   });
   
   

})();



</script>

</body>
</html>










