<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>jQuery Events 201</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<dl>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7.</dd>
</dl>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>

(function() { /// $.filter(':nth-child(n+1)'), $.on(), $.addClass(), $.next(), $.slideDown(), $.slideUp(), $.siblings()
    var $dl = $('dl');
     //   console.log($('dl').children('dd'));
     console.log($('dd').filter(':nth-child(n+8)'));
        $dl.children('dd').css('display','none');
        $dl.find('dd').first().slideDown();
        $('body').find('dl').on('mouseenter', 'dt',function() {
             var $this= $(this);
        //    console.log($this.siblings('dd'));
            $this.next().slideDown(200).siblings('dd').slideUp();
        });
	
	
})();


</script>
<div class="linkz" style="margin-top: 0xpx; margin-left: 30px;"> </div>
</body>
</html>










