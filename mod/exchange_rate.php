<?php
	$ch = curl_init(); //khởi tạo curl

		curl_setopt($ch, CURLOPT_URL, "http://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx");
		
		curl_setopt($ch, CURLOPT_HEADER, 0);  //set header=0
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
		
		$test = curl_exec($ch);//đặt kết quả vào trong biến $test
		curl_close($ch);
		//print($test);
		$xml=simplexml_load_string($test) or die("Error: Cannot create object");

		echo "<p style=\"font-weight: bold;\">Thoi diem: ". $xml->DateTime."</p>";
		echo "<table style=\"border: 1px black solid;width: 100%;\"><tr><th>Ma </th><th>Ten </th><th>Mua</th><th>C. khoan</th><th>Ban</th></tr>";
		$selected_currents =Array('EUR','USD', 'AUD', 'GBR',);
		foreach($xml->Exrate as $currents)
		{						
			$current =$currents->attributes(); //mỗi biến current có attribute 
		
		if( in_array($current->CurrencyCode, $selected_currents) ) echo "<tr><td>".$current->CurrencyCode."</td><td>".$current->CurrencyName."</td><td>".$current->Buy."</td><td>".$current->Transfer."</td><td>".$current->Sell."</td></tr>";
		}
		echo "</table>";
		echo "<center><a href=\"?page=exchange_rate\">More</a></center>"
		//print_r($xml);
		
?>