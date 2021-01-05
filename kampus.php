<!DOCTYPE html>
<html>
    <head>
        <title>Form Kampus</title>
        <link rel="stylesheet" href="styleku.css">
    </head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="utama.php">Pemprov DIY</a></li>
        </ul>
    </div>
    <div class="kontainer">
        <div class="sidenav">
            <ul>
                <li><a href="utama.php">Dashboard</a></li>
                <li><a href="kriteria.php">Kriteria</a></li>
                <li><a class="active" href="#">Kampus</a></li>
                <li><a href="penilaian.php">Penilaian</a></li>
                <li><a href="info.php">Informasi</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>

        <div class="konten">
            <div class="sidebar">
                <h3>PENGINPUTAN KAMPUS</h3>
            </div>
            <div class="tbhkampus">
            <form action="kampus.php" method="POST">
                <p>Tambah Data</p>
                <label for="nama">Nama </label>
                <input type="text" name="nama" required>

                <label for="alamat">  Alamat </label>
                <input type="text" name="alamat" required>

                <input type="submit" value="Tambah" name="Tambah">
            
            </form>
            </div>

            <?php include("koneksi.php");
            if(isset($_POST['Tambah'])){
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];

                $sql = "INSERT INTO tbl_kampus (nama, alamat) VALUE ('$nama','$alamat')";
                $query = mysqli_query($koneksi, $sql);
            }
            ?>
            <div class="dtakampus">
                <br>
                <p>Tabel Data Kampus</p>
                <table>
                    <thead>
                        <tr>
                            <th>No/ID</th>
                            <th>Nama Kampus</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tbl_kampus";
                    $query = mysqli_query($koneksi, $sql);

                    while($kampus = mysqli_fetch_array($query))
                    {
                        echo "<tr>";
                        echo "<td>".$kampus['id']."</td>";
                        echo "<td>".$kampus['nama']."</td>";
                        echo "<td>".$kampus['alamat']."</td>";
                        echo "<td>";
                        echo "<a href='hpskampus.php?id=".$kampus['id']."'>HAPUS</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                </table>
                <p>Total : <?php echo mysqli_num_rows($query)?></p>
            </div>
        </div>
    </div>
</body>
</html>