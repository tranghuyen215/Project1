<?php
	$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	echo "Values are in lowercase:<br> "; 
	foreach ( $Color as $key => $value) {
		
		echo $key." => ".strtolower($value)." ";
		
	}
	echo "<br>Values are in uppercase: <br>";
	foreach ( $Color as $key => $value) {
		
		echo $key." => ".strtoupper($value)." ";
	}
?>
