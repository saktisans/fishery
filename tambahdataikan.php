<!DOCTYPE html>
<html>
<head>
	<title>Stok Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: mediumblue;">
  			<img src="Gambar.png" width="100px" height="90px">
		<a href="logout.php"><img src="logout.png" width="80px" height="40px"></a>
	</nav>
	<div class="bar">
	</div>

<table width="1540">
    <tr>
      <td align="center" width="100"><a href="Home.php" class="btn btn-warning"></i>Kembali</a></td>
      <td align="center"><p><h3><B>Tambah Data Penangkapan</B></h3><h3></h3></td>  
      <td align="center" width="200"><a href="dataikan.php" class="btn btn-info"></i>Lihat Data Penangkapan</a></td>
    </tr> 
</table>


	<form action="prosesikan.php" method="POST">
		<p><table align="center">
        	<tr>
			<td>No</td><td>:</td>
			<td><input type="text" name="nomer"></td>
			</tr>
			<tr>
			<td>Tanggal</td><td>:</td>
			<td><input type="date" name="tgl"></td>
			</tr>
			<tr>
			<td>ID Kapal</td><td>:</td>
			<td><input type="text" name="id_kapal"></td>
			</tr>
			<tr>
			<td>Nama Kapal</td><td> : </td>
			<td><input type="text" name="nama_kapal" id="nama_kapal"></td>
			</tr>
			<tr>
			<td>Jumlah Tangkapan</td><td> : </td>
			<td><input type="text" name="jumlah_tangkapan" id="jumlah_tangkapan"></td>
			</tr>
		</table>
		<p><center><button type="submit" class="btn btn-primary">Kirim</button>
	</form>
</body>
</html>