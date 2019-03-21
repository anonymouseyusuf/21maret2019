<?php

$bulan = array("febriary","maret","april","mei");
foreach ($bulan as $key => $value) {

	if ($value=='mei') {

		echo "cetak bulan".$key."".$value;
		echo "<br>";
		
	}else {
		echo "bukan bulan mei yaitu bulan ".$value;
		echo "<br>";
	}
	
}
?>