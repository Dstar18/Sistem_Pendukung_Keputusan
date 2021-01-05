<!DOCTYPE html>
<html>
    <head>
        <title>Form Penilaian</title>
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
                <li><a href="kampus.php">Kampus</a></li>
                <li><a class="active" href="penilaian.php">Penilaian</a></li>
                <li><a href="info.php">Informasi</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>

        <div class="konten">
            <div class="sidebar">
                <h3>PENILAIAN KAMPUS</h3>
            </div>
            <div class="plhkampus">
                <p>Pilih Kampus</p>
                <form action="penilaian.php" method="POST">
                <select name="tbl_kampus">
                    <option disabled selected>--Pilih--</option>
                    
                    <?php include("koneksi.php");
                    $sql = "SELECT * FROM tbl_kampus";
                    $query = mysqli_query($koneksi, $sql);
                    while ($kampus =  mysqli_fetch_array($query)){                 
                    ?>
                    <option value="<?php echo $kampus['id'];?>"><?php echo $kampus['nama'];?></option>
                   <?php
                   }
                   ?>
                </select>
            </form>
            </div>
                <?php include("koneksi.php");
                    
                    $id_kt = $_POST['id_kt'];
                    $nama_kt = $_POST['nama_kt'];
                    $bobot = $_POST['bobot']; 

                    $sql = "INSERT INTO tbl_kriteria (id_kt, nama_kt, bobot) VALUE ('$id_kt','$nama_kt','$bobot')";
                    $query = mysqli_query($koneksi, $sql);
                    
                ?>
                <div class="plhnilai">
                    <br>
                    <p>Angka  Penilaian 1-10</p>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Keiteria</th>
                                <th>Bobot</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM tbl_kriteria";
                    $query = mysqli_query($koneksi, $sql);

                    while($krt = mysqli_fetch_array($query))
                    {
                        echo "<tr>";
                        echo "<td>".$krt['id_kt']."</td>";
                        echo "<td>".$krt['nama_kt']."</td>";
                        echo "<td>".$krt['bobot']."</td>";
                        echo "<td>";
                        echo "<input type='text' name='nilai' class='nilai' id='nilai'/>";
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