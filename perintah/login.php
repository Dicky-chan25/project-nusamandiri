<?php
include "../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include "../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$email=$_POST['email'];
$password=md5($_POST['password']); //engencrypssi password
$tampil=mysqli_query($koneksi,"select * from anggota where email='$email' and password='$password' and aktif='1'");
//menocokan data yang diinput dengan data yang ada di tabel
$jumlahdata=mysqli_num_rows($tampil);
$anggota=mysqli_fetch_array($tampil);
if($jumlahdata>0) //apabila datanya diketemukan
{
session_start(); //skrip memulai sesi
$_SESSION['id_anggota']=$anggota['id_anggota']; //memasukan nilai sesi dari nilai di tabel member
$_SESSION['nama_lengkap']=$anggota['nama_lengkap'];
$_SESSION['email']=$anggota['email'];
$_SESSION['login']=1;
header('location:../');
}
else
{
    
msgbox("gagal login","../");
}
?>