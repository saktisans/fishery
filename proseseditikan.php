<?php

include('koneksi.php');
$nomer=$_POST['nomer'];
$tgl=$_POST['tgl'];
$id_kapal=$_POST['id_kapal'];
$nama_kapal = $_POST['nama_kapal'];
$jumlah_tangkapan=$_POST['jumlah_tangkapan'];


$sql = "UPDATE penangkapan SET nomer = '$nomer',tgl = '$tgl',id_kapal = '$id_kapal', nama_kapal = '$nama_kapal' , jumlah_tangkapan = '$jumlah_tangkapan' WHERE nomer = '$nomer'";

if ($conn->query($sql) === TRUE) {
    header('Location:dataikan.php');
}


?> 