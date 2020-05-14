<?php

include('koneksi.php');
$id_kapal=$_POST['id_kapal'];
$nama_kapal = $_POST['nama_kapal'];
$tahun_pembuatan=$_POST['tahun_pembuatan'];


$sql = "UPDATE data_kapal SET id_kapal = '$id_kapal', nama_kapal = '$nama_kapal' , tahun_pembuatan = '$tahun_pembuatan' WHERE id_kapal = '$id_kapal'";

if ($conn->query($sql) === TRUE) {
    header('Location:datakapal.php');
}


?> 