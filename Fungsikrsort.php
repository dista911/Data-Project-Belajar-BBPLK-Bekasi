<?php
//memasukkan nilai ke dalam array
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//kunci atau nilai pada aray diurutkan secara descending
krsort($mobil);

//dengan looping menampilkan tiap nilai dari array 
foreach ($mobil as $x => $nilai_x) {
 	echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
 	echo "<br/>";
}
?>