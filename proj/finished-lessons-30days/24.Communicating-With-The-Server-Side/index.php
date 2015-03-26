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
         /// $.post(url,data,success(data, textstats); $.on(); alert(); $.serialize() $.val(); 
        /// grab textarea content
        /// post content to script, and save
        
    $.post('data.txt', function(read) {
        //console.log(' zz '+read);
        $('textarea').val(read);
    }); 
    $('form').on('submit', function(e) {
        e.preventDefault();
        var $this= $(this);
         console.log($this+"zzz"+e);
        $.post('save.php', $this.serialize(), function(read_msg, stats) {
           alert(read_msg+' '+stats);
        });
    });
    
  
  /// grab textarea content
  
  /// post content to script, and save
  
(function() { 
    
    
    
})();



   ///console.log();
</script>

</body>
</html>


 







