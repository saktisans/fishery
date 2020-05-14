<?php

include_once("koneksi.php");

mysqli_query($conn, "DELETE FROM penangkapan WHERE nomer = '$_GET[id]'");

if(query){
	header('Location:dataikan.php');
}else{
	echo "Hapus Data gagal";
}
?>