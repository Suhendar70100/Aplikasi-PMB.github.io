<table align="center">
	<tr>
		<td width="100">
			<center>
				<!-- Lokasi logo kampus pada aplikasi app-pmb -->
				<img src="http://localhost/app-pmb/public/assets/mardira.png" alt="" width="100">
			</center>
		</td>
		<td width="400">
			<center>
				<font size="3">PENDAFTARAN MAHASISWA BARU</font><br>
				<font size="5"><b>STMIK Mardira Indonesia</b></font><br>
				<font size="2">Jl. Soekarno-Hatta No.211 Leuwipanjang-Jawa Barat Website: https://www.stmik-mi.ac.id/beta2/</font><br>
				<font size="1">Email: info@stmik-mi.ac.id Telp. Office: (021) 5230382, 5230382</font>
			</center>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<hr>
		</td>
	</tr>
</table>

<br>

<center>
	<font size="4"><b>BUKTI PENDAFTARAN ONLINE</b></font><br>
</center>

<br><br>

<table align="center">
	<tr>
		<td width="120">Nomor Pendafaratan</td>
		<td width="180">: <b><?= $buktiPendaftaran['nomor_pendaftaran']; ?></b></td>
		<td rowspan="9" width="200">
			<center>
				<!-- Lokasi foto peserta pada aplikasi app-pmb -->
				<img src="http://localhost/app-pmb/public/file_peserta/<?= $buktiPendaftaran['foto']; ?>" alt="" width="200">
			</center>
		</td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>: <?= $nama_fakultas; ?></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>: <?= $nama_prodi; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>: <?= $buktiPendaftaran['nama_peserta']; ?></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal lahir</td>
		<td>: <?= $buktiPendaftaran['tempat_lahir'] . ", " . tgl_indonesia($buktiPendaftaran['tanggal_lahir']); ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>: <?= $buktiPendaftaran['jenis_kelamin']; ?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>: <?= $buktiPendaftaran['agama']; ?></td>
	</tr>
	<tr>
		<td>Sekolah Asal</td>
		<td>: <?= $buktiPendaftaran['nama_sekolah']; ?></td>
	</tr>
	<tr>
		<td>Tanggal Pendaftaran</td>
		<td>: <?= tgl_indonesia($buktiPendaftaran['tanggal_pendaftaran']); ?></td>
	</tr>
</table>

<br>

<table align="center">
	<tr>
		<td width="500">
			<hr>
		</td>
	</tr>
</table>