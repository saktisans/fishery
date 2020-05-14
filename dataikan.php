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
  			<img src="Gambar.png" width="100px" height="90px">
		<a href="logout.php"><img src="logout.png" width="80px" height="40px"></a>
	</nav>
	<div class="bar">
	</div>

<table width="1540">
    <tr>
      <td align="center" width="100"><a href="Home.php" class="btn btn-warning"></i>Kembali</a></td>
      <td align="center"><p><h3><B>Data Penangkapan</B></h3><h3></h3></td>  
      <td align="center" width="250"><a href="tambahdataikan.php" class="btn btn-info"></i>Tambah Data Penangkapan</a></td>
    </tr> 
</table>

  <p><div class="container col-md-12">
    <div class="row">
      <table class="table table-striped table-bordered">
        <tr>
          <th>NO</th>
          <th>Tanggal</th>
          <th>ID Kapal</th>
          <th>Nama Kapal</th>
          <th>Jumlah Tangkapan</th>
          <th>Option</th>
        </tr>
            <?php
            include ('Koneksi.php');
            $no = 1;
            $ikan = mysqli_query($conn, "SELECT * FROM penangkapan");
            while($data = mysqli_fetch_array($ikan)){
            ?>
        <tr>
          <td><?php echo $data['nomer'];?></td>
          <td><?php echo $data['tgl'];?></td>
          <td><?php echo $data['id_kapal'];?></td>
          <td><?php echo $data['nama_kapal'];?></td>
          <td><?php echo $data['jumlah_tangkapan'];?></td>
          <td align="center" width="200">
            <a href="editdataikan.php?id=<?=$data['nomer']?>" class="btn btn-warning">Edit</a>
            <a href="hapusdataikan.php?id=<?=$data['nomer']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</a>
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