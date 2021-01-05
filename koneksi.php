<?php
    $koneksi = mysqli_connect('localhost','admin','admin','ta_spk');
    if(!$koneksi){
        die("Gagal terhubung dengan database !!" . mysqli_connect_error());
    }
?>