<?php

include_once("koneksi.php");

mysqli_query($conn, "DELETE FROM data_kapal WHERE id_kapal = '$_GET[id]'");

if(query){
	header('Location:datakapal.php');
}else{
	echo "Hapus Data gagal";
}
?>