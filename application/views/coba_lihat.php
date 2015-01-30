<html>
	<head>
		<title>Coba</title>
	</head>
	<body>
		<h3>Data di tabel coba</h3>
		<table border='1'>
			<tr>
				<td>Nomor</td>
				<td>Nama</td>
			</tr>
			<?php foreach ($coba as $value) {	
			?>
			<tr>
			<td><?php echo $value->id;?></td>
			<td><?php echo $value->nama; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>