<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<head>
	<style>
		tr {
			line-height: 1.5 em;
		}

		.ttd {
			text-align: right;
			margin-right: 64;

		}

		.name {


			text-align: right;
			margin-right: 60;

		}

		.tgl {

			text-align: right;
			margin-right: 55;

		}

		.unyu {
			width: 50;

		}
	</style>
</head>

<body>
	<center>
		<table="1" width="100%" style="text-align:center;">
			<tr>
				<td class="unyu">
					<?php
					$path = 'assets/file_izin/logoponpes.jpeg';
					$type = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
					?>
					<img src="<?php echo $base64 ?>" width="120" height="120" /></td>
				<td class="lucu">
					<strong>
						<font SIZE="4">PONDOK PESANTREN RADEN RAHMAT SUNAN AMPEL</font><BR>
						<font SIZE="4">YAYASAN AL-MUNAWWIRIY JEMBER</font><BR>
						<font SIZE="3">Jalan Koptu Barlian No. Lingkungan Jambuan Kelurahan Antirogo</font> <br>
						<font SIZE="3">Kecamatan Sumbersari Kabupaten Jember</font>
					</strong>
				</td>

			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			</table>
	</center>

	<CENTER>
		<H3>Surat Keterangan Izin</H3>
	</CENTER>
	<br><br>

	<table>

		<tr>

			<td>

				<font>Surat ini menerangkan bahwa santri dibawah ini : </font>

			</td>
		</tr>
		<table>
			<?php
			foreach ($izin as $row) {
			?>
				<tr>
					<td width="100px">Nama Santri</td>
					<td width="2px">:</td>
					<td><?php echo $row->nama_santri; ?></td>

				</tr>
				<tr>
					<td width="100px">Nama Wali</td>
					<td width="2px">:</td>
					<td><?php echo $row->nama_wali; ?></td>

				</tr>
				<tr>
					<td width="100px">Alamat Santri</td>
					<td width="2px">:</td>
					<td><?php echo $row->alamat; ?></td>

				</tr>


				<tr>
					<td colspan="3">
						<br>
						<font> Diberi izin untuk keluar dari pondok dengan alasan <?php echo $row->alasan; ?></font>
						<font> mulai dari tanggal <?php echo $row->tgl_izin; ?> sampai dengan tanggal <?php echo $row->tgl_datang; ?>.</font><br><br>
						<font>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</font>
					</td>
				</tr>
			<?php
			}
			?>

		</table>
		<br>
		<br>


	</table>

	<br>
	<br>
	<br><br>

	<div class="tgl">
		<?php echo 'Jember, ', date('d-m-Y'); ?>
	</div>

	<p class="ttd"> Pengasuh Pondok <p>
			<?php
			$path = 'assets/file_izin/ttd.png';
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
			?>
			<img src="<?php echo $base64 ?>" width="120" height="120" style="float: right; margin-right: 55px;" /> <br><br><br><br> <br><br>

			<p class="name">KH. Ahmad Nafi <p>
</body>

</html>