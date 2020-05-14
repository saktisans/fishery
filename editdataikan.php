<?php
include 'koneksi.php';
    $id   = $_GET['id'];
    $sql  = mysqli_query($conn, "SELECT * FROM penangkapan WHERE nomer='$id'");
    $row  = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Penangkapan</title>
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
      <td align="center"><p><h3><B>Edit Data Kapal</B></h3><h3></h3></td>  
      <td align="center" width="200"><a href="datakapal.php" class="btn btn-info"></i>Lihat Data Kapal</a></td>
    </tr> 
</table>

	<form action="proseseditikan.php" method="POST">
		<p><table align="center">
			<tr>
			<td>No</td><td> : </td>
			<td>
				<select class="form-control" name="nomer" id="nomer" required>
          				<option value="">--Pilih--</option>
					        <?php
                include('koneksi.php');
                $barang = mysqli_query($conn, "SELECT * FROM penangkapan");
                while ($data = mysqli_fetch_array($barang)) {
                  if ($row['nomer']==$data['nomer']) {
                    $select = "selected";
                  }else{
                    $select = "";
                  }
                  echo "<option $select>".$data['nomer']."</option>";
                }
                ?>
        		</select>
        	</td>
			</tr>

            
      <tr>
      <td>ID Kapal</td><td>:</td>
      <td>
        <input type="text" name="id_kapal" value="<?php echo $row['id_kapal'];?>">
      </td>
      </tr>
      <tr>
      <td>Tanggal</td><td>:</td>
      <td>
        <input type="date" name="tgl" value="<?php echo $row['tgl'];?>">
      </td>
      </tr>
      <tr>
      <td>Nama Kapal</td><td>:</td>
      <td>
        <input type="text" name="nama_kapal" value="<?php echo $row['nama_kapal'];?>">
      </td>
      </tr>
	  <tr>
	  <td>Jumlah Tangkapan</td><td> : </td>
	  <td>
        <input type="text" name="jumlah_tangkapan" id="jumlah_tangkapan" value="<?php echo $row['jumlah_tangkapan'];?>">
      </td>
	  </tr>
		</table>
		<p><center><button type="submit" class="btn btn-primary">Kirim</button>
	</form>
</body>
</html>