<?php
//memasukkan nilai ke dalam array
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//nilai pada aray diurutkan secara descending
arsort($mobil);

//dengan looping menampilkan tiap nilai dari array 
foreach ($mobil as $x => $nilai_x) {
 	echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
 	echo "<br/>";
}
?>