<!DOCTYPE html>
<html> 
<head>
	<title></title>
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
    <ul><li><a href="https://www.instagram.com/nurulrossa">Kontak</a></li></ul>
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
	<?php

// UNTUK MENDEKLARASIKAN VARIABEL YANG KOSONG
$file = fopen("data.txt", "a+"); // untuk membuat file.txt menyimpan data nama,alamat,umur
$namaErr = $nimErr = $umurErr= "";
$nama = $nim = $umur ="";

//berikut kondisi untuk mengecek variabel kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = "Nama tidak boleh kosong";
  } else {
    $nama = "Nama : ". test_input($_POST["nama"])."\n";
    fwrite($file, $nama); // untuk menyimpan nama ke data.txt
 }
  if (empty($_POST["nim"])) {
    $nimErr = "Alamat tidak boleh kosong";
  } else {
    $nim = "Alamat : ". test_input($_POST["nim"])."\n";
    fwrite($file, $nim); // untuk menyimpan alamat ke data.txt
  }
  if (empty($_POST["umur"])) {
  	$umurErr="Umur tidak boleh kososng";
   } else{
   	$umur= "Usia : ".test_input($_POST["umur"])." tahun \n";
    fwrite($file, $umur); // untuk menyimpan umur ke data.txt
   }


}
//berikut fungsi untuk mengembalikan nilai data sehingga dapat ditampung di variabel lain
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
fclose($file);

?>

<!--Berikut merupakan isi dari bagian div isi -->
<p>Agar dapat bergabung dengan komunitas kami dalam mengembangkan bakat dan minat anda di bidang puisi, maka anda sebaiknya mendaftar untuk menjadi anggota dari kami. Silakan mengisi formulir berikut!</p>
<h2>FORMULIR PENDAFTARAN</h2>
<p> <span class="kosong">* Wajib Diisi</span></p> <!--Untuk memberi peringatan saat mengisi form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nama   :<input type="text" name="nama" placeholder="Masukkan nama anda">
  <span class="kosong">* <?php echo $namaErr;?></span>
  <br><br>
  Alamat :<input type="text" name="nim" placeholder="Masukkan alamat anda">
  <span class="kosong">* <?php echo $nimErr;?></span>
  <br><br>
  Umur :<input type="text" name="umur" placeholder="Masukkan umur anda">
  <span class="kosong">* <?php echo $umurErr;?></span><br><br>
  Gender<br><input type="radio" name="Gender" value="Laki-laki">Laki-laki</input><br>
  <input type="radio" name="Gender" value="Perempuan">Perempuan</input><br><br>
  Apakah anda senang membaca puisi?<br>
  <input type="radio" name="baca" value="Suka">Suka</input><br>
  <input type="radio" name="baca" value="Tidak">Tidak Suka</input><br><br>
  Apakah anda sering membuat puisi?<br>
  <input type="radio" name="buat" value="buat">Suka</input><br>
  <input type="radio" name="buat" value="tbuat">Tidak Suka</input><br><br>
  <input type="submit" name="submit" value="Daftar!"><br><br>
</form>
<form name="formpesan">
  Catatan :<br><textarea name="pesan" rows="3" placeholder="Tuliskan alasan anda bergabung dengan kami disini" ></textarea>
  <br><br>
  <input type="submit" value="Kirim!" onclick="kirim()"> <!--Untuk menjalan fungsi kirim pada java.js salah menekan tombol kirim -->
</form>

<!--Untuk design dan isi tampilan pada bagian footer -->
</div>
<div class="footer">
	<p valign="bottom">copyright &copy; 2019 Nurul Rossa</p>
</div>

</body>
</html>