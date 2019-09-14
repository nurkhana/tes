<?php require_once('header.php'); ?>

	<main>
	<form>
		<table>

			<tr>
				<td width="150"><label>Area</label></td>
				<td><select>
						<option value="0">Brenda</option>
						<option value="1">Nur</option>
						<option value="2">Siska</option>
					</select>
				</td>
				<td width="150"></td>
				<td width="150"><label>Tanggal Masuk</label></td>
				<td><input type="text" name="tglmasuk"></td>
				<td colspan="3"></td>
				<td colspan=""><button type="submit">View</button></td>
				<td colspan=""><button type="submit">Submit</button></td>
			</tr>
			<tr>
				<td><label for="id">ID Karyawan</label></td>
				<td><input type="text" name="id" id="id"></td>
			</tr>
			<tr>
				<td><label for="nama_karyawan">Nama Karyawan</label></td>
				<td><input type="text" name="karyawan" id="nama_karyawan"></td>
				<td width="150"></td>
				<td><label>Approval</label></td>
				<td><select>
						<option value="0">Onel</option>
						<option value="1">Donny</option>
						<option value="2">Sesanti</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="jabatan">Jabatan</label></td>
				<td><input type="text" name="jabatan" id="jabatan"></td>
				<td width="150"></td>
				<td><label>PIC Penerima</label></td>
				<td>
					<select>
						<option value="0"> Ester </option>
						<option value="1"> Sisca </option>
						<option value="2"> Fandi </option>
						<option value="3"> Sesanti </option>
						<option value="4"> Viyan </option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label for="cabang">Cabang</label></td>
				<td><input type="text" name="cabang" id="cabang"></td>
			</tr>
			<tr>
				<td><label>Type Pengajuan</label></td>
				<td>
					<select>
						<option value="bukapuasa">PKWT</option>
						<option value="kost">FPSK</option>
						<option value="mudik">FPTK</option>
						<option value="perdin">Internal Memo</option>
						<option value="sewarumah">Surat Keterangan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="keterangan">Keterangan</label></td>
				<td><textarea cols="55" rows="3" id="keterangan"></textarea></td>
			</tr>
			
		</table>
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
				<td>Approval</td>
				<td>Status</td>
				<td>Tanggal Masuk</td>
				<td>Tanggal Keluar</td>
				<td>Diterima Oleh</td>
				<td>Status Akhir</td>
				<td>Action</td>
			</tr>
		</table>
	</form>
	</main>

<?php require_once('footer.php'); ?>