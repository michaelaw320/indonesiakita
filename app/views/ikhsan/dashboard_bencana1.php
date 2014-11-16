<html>
<head>
	<h1>BENCANA SINABUNG</h1>
</head>
<body text-align=center>
	<style>
		.table1, th, td, tr {
			border: 0px solid black;
			border-collapse: collapse;
			padding: 0px;
		}
		.table2, th, td, tr {
			border: 0px solid black;
			border-collapse: collapse;
			padding: 0px;
		}
		.button {
			width: 134px;
			height: 35px;
			background: #ccff00;
			font-weight: bold;
			font-size: 20px;
		}
	</style>
	
	<div>
		<div>
		<table class="table1">
			<tr>
				<td bgcolor="#6366e8" width=40%><h2> Status Gawat Darurat <h2></td>
				<td> <input type="submit" value="Donate" class="button"></input> </td>
			</tr>
			<tr>
				<td><h3> SIAGA 1 <h3> </td>
				<td rowspan = "11" width= 40%><img src=sinabung.png>
				</td>
			</tr>
			<tr>
				<td bgcolor="#6366e8"><h2> Jenis Bencana <h2> </td>
			</tr>
			<tr>
				<td><h3> Gunung Meletus <h3> </td>
			</tr>
			<tr>
				<td bgcolor="#6366e8"><h2> Daerah Dampak Bencana <h2> </td>
			</tr>
			<tr>
				<td><h3> Kecamatan Payung (Desa Sukameriah) <h3> </td>
			</tr>
			<tr>
				<td><h3> Kecamatan Naman Teran (Desa Bekerah, Desa Simacem) </h3> </td>
			</tr>
			<tr>
				<td bgcolor="#6366e8"><h2> Waktu Terjadi <h2> </td>
			</tr>
			<tr>
				<td><h3> 15 September 2013 <h3> </td>
			</tr>
			<tr>
				<td><h3> 00.00 WIB </h3> </tr>
			</tr>
			<tr>
				<td bgcolor="#6366e8"><h2> Penyebab Bencana <h2> </tr>
			</tr>
			<tr>
				<td><h3> Bencana Alamiah <h3> </tr>
			</tr>
			
		</table>
	</div>
	<div>
	<br>
	<br>
	<br>
		<!--Bagian Jumlah Korban dll -->	
		<table>
			<tr>
				<th bgcolor="#cc0000"><h2>Jiwa</h2></th>
				<th> </th>
				<th bgcolor="#cd6600"><h2>Luka Berat</h2></th>
				<th> </th>
				<th bgcolor="#50ada7"><h2>Luka Ringan</h2></th>
				<th> </th>
				<th bgcolor="#6366e8"><h2>Pengungsi</h2></th>
			</tr>
			<tr>
				<th><h2>10</h2></th>
				<th> </th>
				<th><h2>100</h2></th>
				<th> </th>
				<th><h2>11</h2></th>
				<th> </th>
				<th><h2>59 Keluarga</h2></th>
			</tr>
		</table>
		</body>
		<br>
		
	<!--Bagian Tabel -->
		<input type="submit" class="button" name="Refresh" value="Refresh" />
		<?php
		function refresh() {
			echo "The select function is called.";
			exit;
		}

		function insert() {
			echo "The insert function is called.";
			exit;
		}
		?>			
		
		<table class="table2">
		<tr>
			<th width=30%><h3>Jenis</h3></th>
			<th> </th>
			<th width=15%><h3>Kondisi Lapangan</h3></th>		
			<th> </th>
			<th width=15%><h3>Kebutuhan</h3></th>
			<th> </th>
			<th width=15%><h3>Cukup/Tidak</h3></th>
			<th> </th>
		</tr>
		<tr>
			<th bgcolor="#6366e8"><h3>Jumlah Tim Lapangan</h3></th>
		</tr>
		<tr padding=1px>
			<td><h3>Tim Logistik</h3></td>
			<th> </th>
			<td align=center><h3>15</h3></td>
			<th> </th>
			<td align=center><h3>20</h3></td>
			<th> </th>
			<td align=center><h3><img src=merah.png width="30" height="30"></h3></td>
		</tr>
		<tr>
			<td><h3>Tim Medik</h3></td>
			<th> </th>
			<td align=center><h3>35</h3></td> 
			<th> </th>
			<td align=center><h3>30</h3></td>
			<th> </th>
			<td align=center><h3><img src=ijo.png width="30" height="30"></h3></td>
		</tr>
		<tr>
			<td><h3>Tim Konsumsi</h3></td>
			<th> </th>
			<td align=center><h3>25</h3></td>
			<th> </th>
			<td align=center><h3>25</h3></td>
			<th> </th>
			<td align=center><h3><img src=ijo.png width="30" height="30"></h3></td>
		</tr>
		<tr>
			<th bgcolor="#6366e8"><h3>Logistik</h3></th>
		</tr>
		<tr>
			<td><h3>Obat-Obatan</h3></td>
			<th> </th>
			<td align=center><h3>100</td>
			<th> </th>
			<td align=center><h3>100</td>
			<th> </th>
			<td align=center><h3><img src=merah.png width="30" height="30"></td>
		</tr>
		<tr>
			<td><h3 align=center><h3>Selimut</h3></td>
			<th> </th>
			<td align=center><h3>20</td>
			<th> </th>
			<td align=center><h3>19</td>
			<th> </th>
			<td align=center><h3><img src=merah.png width="30" height="30"></td>
		</tr>
		<tr>
			<th bgcolor="#6366e8" align=center><h3>Donasi</h3></th>
			<th> </th>
			<td align=center><h3>Rp. 23.0000.000</td>
			<th> </th>
			<td align=center><h3>Rp. 11.250.000</td>
			<th> </th>
			<td align=center><h3><img src=ijo.png width="30" height="30"></td>
		</tr>
		</table>
	</div>
</body>
</html>