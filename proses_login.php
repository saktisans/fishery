<?php  
include"koneksi.php"; 



 $name=$_POST['username'];
 $pass=$_POST['password'];



	$sql = mysqli_query($conn, "SELECT * FROM tabel_login where username='$name'");
	$data = mysqli_fetch_array($sql);
	
	if($name==$data['username'] && $pass==$data['password']){
		session_start();
	   $_SESSION["username"]=$name;
		header('Location: Home.php');
	}
	{
 		echo "<script>alert('Username atau Password yang Anda Masukan salah".$name.$pass;"');history.go(-1)</script>";
	
 	}
?>