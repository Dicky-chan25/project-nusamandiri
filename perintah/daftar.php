<?php
include "../pengaturan/koneksi.php";
 //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include "../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$nama=$_POST['nama'];
$email=$_POST['email'];
$password=md5($_POST['password']); //engencrypssi password
$kode1=$_POST['kode1'];
$kode2=$_POST['kode2'];
if($kode1==$kode2){ // jika kode yg diinput sama, maka
$simpan=mysqli_query($koneksi, "insert into anggota(nama_lengkap,email,password,aktif) values('$nama','$email','$password',1)");
if($simpan)
msgbox("berhasil terdafar","../"); //redirect ke index.php dg cara naik 1 folder
else
msgbox("Gagal terdafar","../index.php?tampilan=daftar"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}
else
{
msgbox("kode berbeda","../index.php?tampilan=daftar");
} //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
?>