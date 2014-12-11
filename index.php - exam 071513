<?php

/*
// 7.) ---------------------------- FACTORIAL

function factorial($number)
{
  if ($number == 0) { return 1; }
  return $number * factorial($number - 1);
}
$fct =5;
$res = 0;
$res = factorial($fct);
print "result is ${res}\n";

// 8.)  ---------------------------- SORTED ARRAY



function arraySorted($array) {
    $a = $array;
    $b = $array;
    sort($b);
    if ($a == $b){
        return true;
    } else {
        return false;
    }
}

$testentry  = array(0 => 50,
                5 => 10,
                2 => 15);
var_dump($testentry);
echo "<br />";

var_dump(arraySorted($testentry));
echo "<br />";
//bool(false)


$testentry  = array(0 => 5,
                1 => 10,
                2 => 15);
var_dump($testentry);
echo "<br />";


var_dump(arraySorted($testentry));
echo "<br />";
//bool(true)

$numinput=15;
$numexist=FALSE;
if (arraySorted($testentry)) {
   for ($i=0; $i<count($testentry); $i++) {
     if ($numinput===$testentry[$i]) {
               $numexist=TRUE;
     }
  }
  if ($numexist) {
    print $numinput.' found in a sorted array!';
  }else{
    print $numinput.' not found!';
  }
echo "<br />";
// check bool
}



// 9.) ---------------------------- REMOVE DUPLICATES IN ASSOCIATIVE ARRAY SAMPLE#1


$Zoo_array = array(
    'user_id'    => array(294,    297,     294,    298   ),
    'user_first' => array('Dog', 'Cat', 'Dog', 'Bear'),
);

// Find unique user_ids
$uniques = array_unique($Zoo_array['user_id']);

// Keep only the uniques
foreach ($Zoo_array as $col=> $z_list) {
    $Zoo_array[$col] = array_intersect_key($z_list, $uniques);
}

var_DUMP($Zoo_array);



//9.) ---------------------------- REMOVE DUPLICATES IN ASSOCIATIVE ARRAY --- SAMPLE#2

$selection = array('BR', 'MS', 'EG', 'DG');

$input_animals = array(
'DG'=>'DOG',
'CT'=>'CAT',
'MS'=>'MOUSE',
'BR'=>'BEAR',
  'BR'=>'BEAR',
  'DG'=>'DOG',
  'EG'=>'EAGLE',
  'MS'=>'MOUSE',
  'EG'=>'EAGLE',
  'HS'=>'HORSE',
);

$filtered = array_intersect_key($input_animals, array_flip($selection));


var_DUMP($filtered);
*/

?>
<html>
	<head>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">	 </script>
	  <script type="text/javascript">
	  $(document).ready(function() {
		$("#taskText").keydown(function(evt) {
		   if (evt.keyCode == 13) {
				addTask (this, evt);
			}
		});
		$("#addTask").click(function(evt) {
				addTask(document.getElementById('taskText'), evt);
		});
	  $("#tasks li").live("click" , function(evt) {
			if ($(this).hasClass('done')) {
		
				$(this).fadeOut("slow", function(evt) {
					$(this).remove();
				});
			}
			else {
				$(this).addClass('done');
		    }
	  });
	 });	
	  function addTask (textBox, evt) {
				evt.preventDefault();
				var taskText=textBox.value;
				$('<li>').text(taskText).appendTo('#tasks');
				//$('#tasks').append('<li>').text(tastText);
				textBox.value="";
		}
 
	 </script>
	
	  <style type="text/css">
		.done {
			text-decoration: line-through;
		}
	 </style>
	</head>
	<body>
		<ul id="tasks" />
		<input type="text" id="taskText" />
		<input type="submit" id="addTask" />
	</body>
</html>


