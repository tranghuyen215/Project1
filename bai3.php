<?php
	$a = array(0 => 1, 1 => 2, 2 => 7, 3 => 5, 4 => 9, 5 => 10);
	$max = -100000;
	foreach( $a as $key => $value) {
		if( $a[$key] > $max ) {
			$max = $a[$key];
		}
	}
	echo "The largest key is ".$max;
	
?>
