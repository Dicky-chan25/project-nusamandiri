<h1> Berita terbaru </h1> <span class="small">
<?php echo hari_ina(date('l')).", ".tgl_ina($tgl_skrg) ." .:::." .$jam_skrg;  ?></span> <hr>
<?php

$querynews=mysqli_query($koneksi,"select * FROM berita order by id_berita desc limit 0,5 "); //berita akan tampil 1 per satu dari yg terbaru
$jmlberita=mysqli_num_rows(mysqli_query($koneksi,"select * FROM berita")); //dihitung semua berita
echo "<div class='jcarousel-wrapper'>
<div class='jcarousel'>
<ul>"; //ini sebagai bingkai dari slider
while($berita=mysqli_fetch_array($querynews)){ //memulai perulangan
echo "<li><h3>".ucwords($berita['judul'])."</h3>"; //ucword membuat huruf awal kata menjadi huruf besar
echo "<span class='small'>".tgl_ina2($berita['tgl_posting'])."<br>Diposting oleh : ". nama($berita['id_admin']). "</span>";
if (empty($berita['gambar'])) //kalo gambarnya tidak ada,
{$gambar="nopic.jpg";} //maka, pakai gambar default
else
{ $gambar=$berita['gambar'];}
echo "<div><img src='gambar/$gambar' width='300px' height='200px'></div>
<p>$berita[teks_berita]</p>
<br>
</li>
";
echo selisihwaktu($berita['tgl_posting']);
} // tutup perulangan
echo "</ul></div> 
"; //tutup bingkai 1
?>
<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
  <a href="#" class="jcarousel-control-next">&rsaquo;</a>
</div> <!--tutup bingkai 2 -->
 