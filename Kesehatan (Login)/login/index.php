<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
	<h1>FORM UPLOAD FILE</h1>
	Nama :
	<input type="text" name="nama"><br>
	Gambar :
	<input type="file" name="gambar"><br>
	<br>
	<button type="submit" name="btn">Submit</button>
</form>
<br>
<hr>
<?php
	include 'koneksi.php';

	$query = "select * from barang";

	$hasil = mysqli_query($koneksi, $query);
	$no = 1;

 ?>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Gambar</td>
	</tr>
	<?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><img src="<?php echo $data['gambar'] ?>" width="150px"></td>
	</tr>
	<?php } ?>
