<?php
include_once("koneksi.php");
// menyimpan data kedalam variabel
// query SQL untuk insert data
if (isset($_POST["id_kapal"])) {
	$query = mysqli_query($conn, "INSERT INTO `data_kapal` ( id_kapal, nama_kapal, tahun_pembuatan ) VALUES('$_POST[id_kapal]','$_POST[nama_kapal]','$_POST[tahun_pembuatan]')");

if ($query) {
	header('Location:tambahdatakapal.php');
} else {
	echo "Data Gagal Disimpan";
}

}


?>