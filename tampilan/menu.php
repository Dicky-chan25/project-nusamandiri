<?PHP

$query=mysqli_query($koneksi,"select * FROM kategori ");
echo "<span class='menu'><a href='index.php'> HOME </a> </span> ";
while($kategori=mysqli_fetch_array($query)){
echo "<span class='menu'>
<a href='index.php?tampilan=kategori&id_kategori=$kategori[id_kategori]&kategori=$kategori[kategori]'>".
strtoupper($kategori['kategori']) . "</a> </span>"; //strtoupper untuk merubah tulisan kecil menjadi besar
}// tutup while

echo "<span class='menu'><a href='index.php?tampilan=layananiklan'> LAYANAN IKLAN </a> </span> ";
?>
 