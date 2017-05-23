<?php
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://vnexpress.net/rss/tin-moi-nhat.rss");
		
		curl_setopt($ch, CURLOPT_HEADER, 0);  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
		
		$test = curl_exec($ch);
		curl_close($ch);

		$xml=simplexml_load_string($test) or die("Error: Cannot create object");

		//print_r($xml);
		echo "<table>";
		$c = 0;
		foreach($xml->channel->item as $it)
		{
			if($c%2==0) echo "<tr>";

			echo "<td>";	
			echo "<b>".$it->title."</b><br>";
			
			$des = $it->description;

			$arr = preg_split("/\"/",$des);
			//print_r($arr);
			echo "<table><tr><td><a href=\"$arr[1]\"><img src=\"$arr[3]\"></a></td>";
			echo "<td><i>".substr($arr[4],11,-1)."</i></td></tr></table>";
						echo "</td>";	

			if($c%2==1) echo "</tr>";
			$c++;
		}
		if($c%2==1) echo "<td></td></tr>";
	
		echo "</table>";
		
?>

