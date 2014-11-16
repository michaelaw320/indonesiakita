@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
	</style>
@stop
@section("content")
	<div class="starter-template">
		<!-- Tab Header -->
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="logistik">Lihat Logistik</a></li>
				<li class="active"><a href="update">Update Data<span class="sr-only">(current)</span></a></li>
				<li><a href="userrole">Pembagian Tugas</a></li>
				<li><a href="request">Lihat Request</a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	
	<div id="lihatLogistik">
		<table class="table">
			<tr>
				<td>
					<img src="{{ URL::asset('img/cover_update_data.jpg') }}">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="row">

			<div class="col-sm-4">
				<p>
					<h1>
					Donasi
					</h1>
					<h1>
						<input type="text" value="Rp 23.000.000">
					</h1>
				dari <input type="text" value="Rp. 11.250.000">
				</p>
				<h2>Kondisi Bencana</h2>
				<!--Bagian Jumlah Korban -->
				<table class="table">
					<thead>
						<tr>
							<th><div class="label label-default">Luka Ringan</div></th>
							<th><div class="label label-warning">Luka Berat</div></th>
							<th><div class="label label-danger">Korban Jiwa</div></th>
							<th><div class="label label-success">Pengungsi</div></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" value="100"></td>
							<td><input type="text" value="11"></td>
							<td><input type="text" value="10"></td>
							<td><input type="text" value="59"></td>
						</tr>
					</tbody>
				</table>
				<!--Bagian Tabel -->
				<table class="table">
					<thead>
						<tr>
							<th>Jenis</th>
							<th>Kondisi Lapangan</th>
							<th>Kebutuhan</th>
						</tr>
					</thead>
					<tbody>
						<tr class="alert alert-danger">
							<td>Tim Logistik</td>
							<td><input type="text" value="15"></td>
							<td><input type="text" value="20"></td>
						</tr>
						<tr class="alert alert-success">
							<td>Tim Medik</td>
							<td><input type="text" value="35"></td> 
							<td><input type="text" value="30"></td>
						</tr>
						<tr class="alert alert-success">
							<td>Tim Konsumsi</td>
							<td><input type="text" value="25"></td>
							<td><input type="text" value="25"></td>
						</tr>
						<tr class="alert alert-success">
							<td>Obat-Obatan</td>
							<td><input type="text" value="100"></td>
							<td><input type="text" value="100"></td>
						</tr>
						<tr class="alert alert-success">
							<td>Selimut</td>
							<td><input type="text" value="20"></td>
							<td><input type="text" value="19"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<button class="btn btn-primary" type="submit" align="center">UPDATE</button>
	
	<!-- TODO: import modulnya kak ikhsan untuk page update, ganti angkanya dengan form text kosong placeholdernya nilai originalnya -->
	
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop