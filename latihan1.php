<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Latihan 1 (Program menghitung volume bangun ruang):.</title>
</head>

<body>


<form id="form1" name="form1" method="post" action="latihan1.php">
<p align="left"> Menghitung Volume Bangun Ruang
</p>
<p align="left"> Masukkan nilai panjang <input type="text" name="panjang" id="nilai"/> 
</p>
<p align="left"> Masukkan nilai lebar <input type="text" name="lebar" id="nilai"/>
</p>
<p align="left"> Masukkan nilai tinggi <input type="text" name="tinggi" id="nilai"/>
</p>
<p align="left"><input type="submit" name="hitung" id="button" value="hitung" />
</p>
</form>
<?php

$panjang=$_POST['panjang'];
$lebar=$_POST['lebar'];
$tinggi=$_POST['tinggi'];
$volum;
echo"<br> Nilai panjang = $panjang cm";
echo"<br> Nilai lebar = $lebar cm";
echo"<br> Nilai tinggi = $tinggi cm";
$volum=$panjang*$lebar*$tinggi;
echo"<br> Volume bangun ruang = $volum cm3";
	?>
</p>
</body>
</html>
