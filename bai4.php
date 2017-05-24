<?php
	$first = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
	$second = array('c2' , 'c4');
	$filtered = array_filter(
  	  $first,
  	  function ($key) use ($second) {
   	     return in_array($key, $second);
   	 },
   	 ARRAY_FILTER_USE_KEY
	);
	
	$results = array_diff($first,$filtered);
	print_r($results);
?>
