<?php 	
include('koneksi.php');
$db = new nadia();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  background-color: rgb(67,92,125);
}

table {
  border-collapse: collapse;
  width: 80%;
  background-color: #c5c5c5;

  
}
h3 {
  color: white;
  text-shadow: 2px 2px 4px white;
}
th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
	<title>tugas crud oop</title>
</head>
<body>
<h3 calss ="text" align= "center"style="color : white">TUGAS CRUD OOP</h3></br></br>
<table border="1"align=center>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nisn']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">UBAH</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<a class="btn btn-outline-light"  href="tambah_data.php" role="button"style="margin-left: 500px; ">Tambah data</a>
</body>
</body>
</html>