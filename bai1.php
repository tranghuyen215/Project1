<?php
	$a = array( 0 => 5, 1 => 3, 2 => 1, 3 => 3, 4 => 8, 5 => 7, 6 => 4, 7 => 1, 8 => 1, 9 => 3 );
	
	
	$len = sizeof($a);


	for ($i= 0; $i < $len - 1 ; $i++) {
		for ($j = 0 ; $j < $len-$i-1 ; $j++) {
			if( $a[$j] < $a[$j+1]) {
				$temp = $a[$j];
				$a[$j] = $a[$j+1];
				$a[$j+1] = $temp;
				
			}
		}
	}

	
	print_r($a);

?>
