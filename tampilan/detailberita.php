<h2> Berita </h2> <span class="small"><?php echo tgl_ina($tgl_skrg) ." .:::." .$jam_skrg;  ?></span> <hr>
<?php
include "../pengaturan/koneksi.php";
$id_berita=$_GET['id_berita'];
$querynews=mysqli_query($koneksi,"select * from berita where id_berita='$id_berita' "); 
$update=mysqli_query($koneksi, "update berita set dilihat=dilihat+1  where id_berita='$id_berita' "); //mengupdate status dilihat 
$berita=mysqli_fetch_array($querynews);
echo "<h2 align='center'>".ucwords($berita['judul'])."</h2>"; //ucword membuat huruf awal kata menjadi huruf besar
echo "<span class='small'>".tgl_ina2($berita['tgl_posting'])."<br>Diposting oleh : ". nama($berita['id_admin']). "</span>";
if (empty($berita['gambar'])) //kalo gambarnya tidak ada,
{$gambar="nopic.jpg";} //maka, pakai gambar default
else
{ $gambar=$berita['gambar'];}
echo "<div><img src='gambar/$gambar' width='300px' heigh='200px'></div>
<p>$berita[teks_berita]</p>
<br>
"; 
echo "<h3> <u>Komentar</u></h3>";
$querykomen=mysqli_query($koneksi,"select  a.id_komentar, a.tgl_komentar, a.isi_komentar,b.nama_lengkap,b.email from komentar a inner join anggota b on a.id_anggota=b.id_anggota where a.id_berita='$id_berita' order by a.tgl_komentar desc");  //join tabel anggota dg tabel komentar
while($komen=mysqli_fetch_array($querykomen))
{
echo " <div class='small'> $komen[nama_lengkap] ($komen[email]) ".tgl_ina2($komen['tgl_komentar'])."</div>";
echo "  $komen[isi_komentar]<hr>";
}
if(!empty($_SESSION['login'])){
echo "<form action='perintah/komentar.php' method='post'> <input type='hidden' name='id_berita' value='$id_berita'> <textarea name='komentar' placeholder='isi komentar'></textarea> <button type='submit'>Kirim</button></form>";
}
?>