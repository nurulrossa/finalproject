/*cari() merupakan fungsi yang digunakan pada puisiortu.html dan sahabat.html 
untuk menghubungkan halaman web ini dengan percarian menggunkan google*/
function cari() {
	var kata = document.formcari.keyword.value;
	var hasil= "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=auto, scrollbars=yes location=yes') 
}

/*kirim() merupakan fungsi yang digunkan pada home.php untuk tampilan catatan 
agar memberi peringatan jika pengecekan textarea kosong*/
function kirim() {
var nama = document.formpesan.pesan.value;
if(nama == "") alert("Kolom Catatan tidak boleh kosong");
}

//displayDate() digunakan pada anggota.php untuk menampilkan waktu saat halaman web dibuka
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}