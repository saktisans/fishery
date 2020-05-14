<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: mediumblue;">
  		<ul class="nav nav-pills nav-fill">
  			<img src="Soludea.jpg" width="220px" height="60px">
  			<li class="nav-item padding">
    			<a class="nav-link" href="TabelStok.php"><font size="4" color="white">Stok</font></a>
  			</li>		
  			<li class="nav-item padding">
    			<a class="nav-link" href="TabelBarang.php"><font size="4" color="white">Barang</font></a>
  			</li>
  			<li class="nav-item padding">
    			<a class="nav-link" href="Transaksi.php"><font size="4" color="white">Transaksi</font></a>
  			</li>
  			<li class="nav-item padding">
    			<a class="nav-link" href="Member.php"><font size="4" color="white">Member</font></a>
  			</li>
  			<li class="nav-item padding">
    			<a class="nav-link" href="#"><font size="4" color="white">Analisis data</font></a>
  			</li>
  			<li class="nav-item padding">
    			<a class="nav-link" href="TabelJenisbarang.php"><font size="4" color="white">Jenis Barang</font></a>
  			</li>
		</ul>
		<a href="logout.php" class="btn btn-danger">Logout</a>
	</nav>
	<div class="bar">
	</div>

<table width="1540">
    <tr>
      <td align="center" width="100"><a href="Kasir.php" class="btn btn-warning"></i>Kembali</a></td>
      <td align="center"><p><h3><B>Tabel Jenis Barang</B></h3><h3></h3></td>  
      <td align="center" width="245"><a href="jenisbarang.php" class="btn btn-info"></i>Tambah Jenis Barang</a></td>
    </tr> 
</table>

  <p><div class="container col-md-12">
    <div class="row">
      <table class="table table-striped table-bordered">
        <tr>
          <th>Kode Jenis Barang</th>
          <th>Jenis Barang</th>
          <th>Opsi</th>
        </tr>
            <?php
            include ('Koneksi.php');
            $no = 1;
            $transaksi = mysqli_query($conn, "SELECT * FROM tabel_kode_jenis");
            while($data = mysqli_fetch_array($transaksi)){
            ?>
        <tr>
          <td><?php echo $data['kode_jenis_barang'];?></td>
          <td><?php echo $data['jenis_barang'];?></td>
          <td align="center" width="200">
            <a href="editjenisbarang.php?id=<?=$data['kode_jenis_barang']?>" class="btn btn-warning">Edit</a>
            <a href="hapusbarang.php?id=<?=$data['kode_jenis_barang']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</a>
          </td>
        </tr>
            <?php 
            }
            ?>
      </table>
    </div>
  </div>
  
  
<script src="./assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>