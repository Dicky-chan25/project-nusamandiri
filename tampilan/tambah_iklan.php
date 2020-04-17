<h2> Tambah Iklan</h2>
<form action="perintah/kelola_iklan.php?aksi=tambah" method="post" enctype="multipart/form-data" name="form1">
<table width="50%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Nama perusahaan</td>
    <td><input type="text" name="nm_perusahaan" required></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" required></td>
    </tr>
  <tr>
    <td>Link</td>
    <td><input type="text" name="link" value="http://" required></td>
  </tr>
  <tr>
    <td>Teks Iklan</td>
    <td><label>
      <textarea name="teks_iklan" id="textarea" cols="45" rows="5" required></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Tgl Mulai</td>
    <td><label>
      <input type="date" name="tgl_mulai" id="tmulai" placeholder='yyyy-mm-dd' required>
    </label></td>
  </tr>
  <tr>
    <td>Tgl Akhir</td>
    <td><input type="date" name="tgl_akhir" id="takhir" placeholder='yyyy-mm-dd' required></td>
  </tr>
  
  
  <tr>
    <td>Harga Sewa</td>
    <td><input type="text" name="hargasewa" required ></td>
  </tr>
  
  
  <tr>
    <td>Gambar</td>
    <td><input type="file" name="gambar" required></td>
  </tr>
  <tr>
    <td><button type="submit"> Simpan </button></td>
    <td><button type="button" onClick="location=('admin.php?tampilan=kelola_berita')"> Kembali </button></td>
  </tr>
</table>
</form>
