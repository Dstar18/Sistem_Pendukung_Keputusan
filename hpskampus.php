<?php include("koneksi.php");
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_kampus WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query)
    {
        header('Location: kampus.php');
    }
    else
    { 
        die("Gagal menghapus...");
    }
}
else
{
    die("akses dilarang...");
}
?>