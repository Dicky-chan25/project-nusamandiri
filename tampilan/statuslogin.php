<?php

if(empty($_SESSION['login'])){ //jika belum login maka
?>
<fieldset>
<legend><h2>Login Anggota</h2></legend>
<form action="perintah/login.php" method="post">
<div> <input type="text" name="email" size="15" placeholder="username" required></div>
<div> <input type="password" name="password" size="15" placeholder="Password" required></div>
<br>
<button type="submit">Login</button> <a href="index.php?tampilan=daftar">Mendaftar</a> 
<hr>
</form>
</fieldset>
<?php 
} //tutup jika belum login 
else{ //selain itu, atau kecuali (jika sudah login). maka
$personal=mysqli_fetch_array(mysqli_query($koneksi,"select *from anggota where id_anggota='$id_anggota'"));
?>
<fieldset>
<legend><h2> Status</h2></legend>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $personal['nama_lengkap']; ?></td>
  </tr>
  <tr>
    <td><?php echo $personal['email']; ?></td>
  </tr>
  <tr>
    <td><a href="perintah/logout.php"><button>Logout</button></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
<?php } //tutup jika sudah login ?>