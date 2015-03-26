<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>AJAX: POST</title>
	<style>

      
	</style>
</head>
<body>
   
    <h1>Something to Save</h1>
    <form action="#">
        <!--<input name="name">-->
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <p><button type="submit">Save</button></p>
    </form>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 

<script>
    /// $.post(url,data,success(data, textstats); $.on(); alert(); $.serialize();
    $.post('load.php', function(data) {
      //  console.log(data);
        if (data ){
           $('#content').val(data);
        };
    });
    
 ///listen for clicked
  $('form').on('submit', function(e) {
      $.post('save.php', $(this).serialize(), function(response) {///multiple form elements/submits with corresponding names
         // console.log(data);  //serialize it before submission
        
         alert(response);
      });
    //  console.log($(this).find('#content').val()); 
        /// disable default action
      e.preventDefault();
  });

  
  /// grab textarea content
  
  /// post content to script, and save
  
(function() { 
    
    
    
})();



   ///console.log();
</script>

</body>
</html>


 







