<!DOCTYPE html>
<html>
<head>
 <title>maribelajarcoding.com</title>

</head>
<body>
 <h2>maribelajarcoding.com</h2>
<form method="POST">
 <select name="tabel" id="tabel">
  <option disabled selected> Pilih </option>

<?php 
    $koneksi = mysqli_connect("localhost","admin","admin","ta_spk");
    $sql = "SELECT * FROM tbl_kampus";
    $hasil = mysqli_query($koneksi,$sql);
    while ($data=mysqli_fetch_array($hasil)) {
 ?>
   <option value="<?=$data['id']?>"><?=$data['nama']?></option> 
 <?php
  }
 ?>
  </select>
  <input type="submit" name="simpan" value="simpan">
</form>
<?php
 if ($data["simpan"] == "POST") {
    $nama = $_POST['nama'];
 }
?>
</body>
</html>