<?php
$nim  = "23215007";
$nama  = 'Putri Areka';
$umur  = 20;
$nilai  = 82.25;
$status  = TRUE;

echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
print ("Nilai : %.3f<br>", $nilai);
if ($status)
	echo "Status : Aktif";
else
	echo "Status : Tidak Aktif";
?>