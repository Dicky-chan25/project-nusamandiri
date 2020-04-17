<fieldset><legend><h2> Iklan </h2></legend>
<?php

$aktifiklan=mysqli_query($koneksi,"update  iklan set aktif=1 where tgl_mulai>= curdate() "); // set iklan menjadi 1 jika tgl awalnya adalah tgl skrg
$nonaktif_iklan=mysqli_query($koneksi,"update iklan set aktif=0 where tgl_akhir < curdate() "); // set iklan menjadi 0 , yg tgl akhirnya lewat tgl skrng
$query=mysqli_query($koneksi, "select * from iklan where aktif=1"); // tampilkan iklan yg masih akif yg tgl_awalnya dimulai dr skrg
while($iklan=mysqli_fetch_array($query)){
echo "<span class='iklan'>
<a href='$iklan[link]' target='_BLANK'>
<img src='gambar/$iklan[gambar]' width='75px'>
<h3>$iklan[isi_iklan]</h3></a> </span> <hr>";
}
?>
</fieldset>
 