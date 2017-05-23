<?php
	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx");
		
		curl_setopt($ch, CURLOPT_HEADER, 0);  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
		
		$test = curl_exec($ch);
		curl_close($ch);
		//print($test);
		$xml=simplexml_load_string($test) or die("Error: Cannot create object");
		
		require_once('_header.php'); 
		echo "<h1>Exchange rates</h1>";
		echo "<p style=\"font-weight: bold;\">Thoi diem: ". $xml->DateTime."</p>";
		echo "<table style=\"border: 1px black solid;width: 100%;\"><tr><th>Ma </th><th>Mua</th><th>C. khoan</th><th>Ban</th></tr>";
		
		foreach($xml->Exrate as $currents)
		{						
			$current =$currents->attributes();
		
		echo "<tr><td>".$current->CurrencyCode."</td><td>".$current->Buy."</td><td>".$current->Transfer."</td><td>".$current->Sell."</td></tr>";
		}
		echo "</table>";
		//echo "<center><a href=\"?page=exchange_rates\">More</a></center>"
		//print_r($xml);
		echo "<p>&nbsp;</p>";
		require_once('_footer.php'); 
?>