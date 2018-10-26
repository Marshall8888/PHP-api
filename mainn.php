<?php 
	include "Koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="6">
				<h3><center>DATA</center></h3>
				<a href="index.php">Tambah</a>
			</td>
		</tr>
		<tr>
			<th>NO</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Opsi</th>
		</tr>
			<?php 
				
				$qry = mysqli_query($koneksi,"SELECT * FROM class_profile");
				while($data = mysqli_fetch_array($qry)){
			 ?>
		<tr>
			<td><?php echo $data['Id']; ?></td>
			<td><?php echo $data['Username']; ?></td>
			<td><?php echo $data['Password']; ?></td>
			<td><?php echo $data['Level']; ?></td>
			<td><?php echo $data['Fullname']; ?></td>
			<td>
			<a onclick="return confirm('Yakin untuk menghapus ?')"
			href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
			</td>

		</tr>

	<?php  
}
?>
	</table>
</body>
</html>