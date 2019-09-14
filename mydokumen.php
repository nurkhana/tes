<?php require_once('header.php'); ?>

	<main>
	<form>
		<label for="id">ID Karyawan</label>
		<input type="text" name="id" id="id"><br>
		<label for="nama">Nama Karyawan</label>
		<input type="text" name="nama" id="nama"><br>
		<label for="jabatan">Jabatan</label>
		<input type="text" name="jabatan" id="jabatan"><br>
		<label>Type Pengajuan</label>
			<select>
				<optgroup label="Tidak Bernominal">
					<option value="bukapuasa">PKWT</option>
					<option value="kost">FPSK</option>
					<option value="mudik">FPTK</option>
					<option value="perdin">Internal Memo</option>
					<option value="sewarumah">Surat Keterangan</option>
				</optgroup>
				<optgroup label="Bernominal">
					<option value="bukapuasa"> Buka Puasa </option>
					<option value="kost"> Kost </option>
					<option value="mudik"> Mudik </option>
					<option value="perdin"> Perjalanan Dinas </option>
					<option value="sewarumah"> Sewa Rumah </option>
					<option value="sukacita">Sukacita</option>
					<option value="dukacita">Dukacita</option>
				</optgroup>
			</select><br>
		<label for="daritgl">Dari tanggal</label>
		<input type="text" name="daritgl" id="daritgl"><br>
		<label for="ketgl">Sampai tanggal</label>
		<input type="text" name="ketgl" id="ketgl"><br>
	</form>
	<hr>
	<form>
		<table border="1" width="5">
			<tr>
				<td>Area</td>
				<td>Nama Karyawan</td>
				<td>Jabatan</td>
				<td>Cabang</td>
				<td>Type Pengajuan</td>
				<td>Keterangan</td>
				<td>Kelebihan</td>
				<td>Kekurangan</td>
				<td>Approval</td>
				<td>Status</td>
				<td>Tanggal Masuk</td>
				<td>Tanggal Keluar</td>
				<td>Diterima Oleh</td>
				<td>Status Akhir</td>
				<td>Upload</td>
			</tr>
		</table>
	</form>
	</main>

<?php require_once('footer.php'); ?>