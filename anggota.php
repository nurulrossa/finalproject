<!DOCTYPE html>
<html>
<head> 
	<title></title>
<!--code berikut dipakai untuk memberitahukan pada file ini bahwa menggunkan css pada coba.css dan javascript pada java.js -->
<link rel="stylesheet" type="text/css" href="coba.css">
<script type="text/javascript" src="java.js"></script>
</head>
<body>  
<!--Berikut div class bio untuk menampilkan foto dan biodata di bagian kanan tampilan -->
	<div class="bio">
		<img class="biod" src="gmbr.jpg"><br><br><br><br><br><br>
		<p>Nama     : Nurul Rossa W Tosofu</p>
		<p>NIM      : 1800018142</p>
		<p>Kelas    : C </p>
		<p>Angkatan : 2018 </p>
	</div>
<!--Berikut untuk tampilan bagian header -->
<div class="header">
	<img class="logo" src="logouad.jpg">
	<ul class="menu">
		<li><a href="home.php">Home</a></li>
		<li><a href="puisiortu.html">Puisi Orang Tua</a></li>
		<li><a href="sahabat.html">Puisi Sahabat</a></li>
		<li><a href="anggota.php">Profil Anggota</a></li>
	</ul>
</div>
<!--Berikut code untuk tampilan bagian isi(tengah) -->
<div class="isi">
	<button onclick="displayDate()">Waktu sekarang?</button> <!--Untuk menjalankana fungsi displayDate() yang ada pada java.js -->
			<p id="demo"></p> <!--Untuk menampilkan hasil dari displayDate() -->

<?php
//untuk menampilkan isi dari data.txt ke tampilan web
$myfile = fopen("data.txt", "r") or die("Tidak bisa membuka file!");
// menampilkan per baris sampai end-of-file / akhir dari file
while(!feof($myfile)) {
echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</div>
<!--Untuk design dan isi tampilan pada bagian footer -->
<div class="footer">
	<p valign="bottom">copyright &copy; 2019 Nurul Rossa</p>
</div>

</body>
</html>