<?php
require 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Wajib Pajak</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
		.container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
		h1 { color: #333; text-align: center; }
		.success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 15px 0; }
		.error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 15px 0; }
		.info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 15px 0; }
		table { width: 100%; border-collapse: collapse; margin-top: 20px; }
		th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
		th { background: #4CAF50; color: white; }
		tr:hover { background: #f5f5f5; }
		tr:nth-child(even) { background: #f9f9f9; }
		.btn { padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer; margin: 2px; }
		.btn-edit { background: #FF9800; color: white; }
		.btn-delete { background: #f44336; color: white; }
		.no-data { text-align: center; padding: 50px; color: #666; }
	</style>
</head>
<body>
	<div class="container">
		<h1>Data Wajib Pajak</h1>

		<?php if (!$koneksi_sukses): ?>

		<?php else: ?>
			
			<div class="info">
				Total Data Wajib Pajak: <?php echo count($data); ?> data
			</div>
		<?php endif; ?>

		<?php if ($koneksi_sukses && count($data) > 0): ?>
			<table>
				<tr>
					<th>ID WP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No KTP</th>
					<th>No HP</th>
					<th>Aksi</th>
				</tr>
				<?php foreach ($data as $row): ?>
					<tr>
						<td><?php echo $row['id_wp']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td><?php echo $row['no_ktp']; ?></td>
						<td><?php echo $row['no_hp']; ?></td>
						<td>
							<button class="btn btn-edit" onclick="alert('Edit ID: <?php echo $row['id_wp']; ?>')">Edit</button>
							<button class="btn btn-delete" onclick="if(confirm('Hapus data?')) alert('Hapus ID: <?php echo $row['id_wp']; ?>')">Hapus</button>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		<?php elseif ($koneksi_sukses): ?>
			<div class="no-data">
				<h3>Tidak ada data</h3>
				<p>Tabel tbl_wp kosong</p>
			</div>
		<?php endif; ?>
	</div>
</body>
</html>