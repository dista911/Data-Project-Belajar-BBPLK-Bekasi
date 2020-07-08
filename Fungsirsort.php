<?php
//memasukkan nilai ke dalam array
$mobil=array("Volvo", "BMW", "Toyota");

//aray diurutkan secara descending
rsort($mobil);

//mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilai dari array 
for ($x=0; $x < $length ; $x++){
	echo $mobil[$x]; 
	echo "<br/>";
}
?>