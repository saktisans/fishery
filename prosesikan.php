<?php
include_once("koneksi.php");
// menyimpan data kedalam variabel
// query SQL untuk insert data
if (isset($_POST["nomer"])) {
	$query = mysqli_query($conn, "INSERT INTO `penangkapan` ( nomer, tgl, id_kapal, nama_kapal, jumlah_tangkapan ) VALUES('$_POST[nomer]','$_POST[tgl]','$_POST[id_kapal]','$_POST[nama_kapal]','$_POST[jumlah_tangkapan]')");

if ($query) {
	header('Location:tambahdataikan.php');
} else {
	echo "Data Gagal Disimpan";
}

}


?>