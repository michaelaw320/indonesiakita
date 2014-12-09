@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		#bagiLogistik{
			width: 30%
		}
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
				<li class="active"><a href="#">Lihat Logistik<span class="sr-only">(current)</span></a></li>
				<li><a href="update">Update Data</a></li>
				<li><a href="#">Pembagian Tugas</a></li>
				<li><a href="#">Lihat Request</a></li>
				<li><a href="#">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	
	<table class="table table-condensed" style="display: inline-block;">
		<tr>
			<td colspan="2">
				<img src="{{ URL::asset('img/cover_lihat_logistik.jpg') }}">
			</td>
		</tr>
	</table>
			<h3>Berikut adalah hasil pembagian logistik berdasarkan daerah</h3>

	<div class="row">
		<div class="col-sm-12 sidebar">
			<table class="table table-condensed" cellpadding="20px">
				<tr>
					<td>
						<h3>Kecamatan Barastagi</h3>
					</td>
					<td>
						<h3>Desa Daulu</h3>
					</td>
					<td>
						<h3>Desa Gurusinga</h3>
					</td>
				</tr>
				<tr>
					<td>
						30 Bungkus Makanan Kering
					</td>
					<td>
						40 Bungkus Makanan Kering
					</td>
					<td>
						50 Bungkus Makanan Kering
					</td>
				</tr>
				<tr>
					<td>
						10 Kaleng Susu Bayi
					</td>
					<td>
						15 Kaleng Susu Bayi
					</td>
					<td>
						5 Kaleng Susu Bayi
					</td>
				</tr>
				<tr>
					<td>
						12 Galon Mineral
					</td>
					<td>
						18 Galon Mineral
					</td>
					<td>
						6 Galon Mineral
					</td>
				</tr>
				<tr>
					<td>
						50 Botol Mineral
					</td>
					<td>
						100 Botol Mineral
					</td>
					<td>
						70 Botol Mineral
					</td>
				</tr>
				<tr>
					<td>
						30 Liter Bensin
					</td>
					<td>
						50 Liter Bensin
					</td>
					<td>
						40 Liter Bensin
					</td>
				</tr>
				<tr>
					<td>
						30 Liter Solar
					</td>
					<td>
						40 Liter Solar
					</td>
					<td>
						50 Liter Solar
					</td>
				</tr>
				<tr>
					<td>
						30 Set Pakaian Dewasa
					</td>
					<td>
						20 Set Pakaian Dewasa
					</td>
					<td>
						20 Set Pakaian Dewasa
					</td>
				</tr>
				<tr>
					<td>
						10 Set Pakaian Bayi
					</td>
					<td>
						10 Set Pakaian Bayi
					</td>
					<td>
						10 Set Pakaian Bayi
					</td>
				</tr>
				<tr>
					<td>
						60 Popok Bayi
					</td>
					<td>
						80 Popok Bayi
					</td>
					<td>
						60 Popok Bayi
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
						<center><a id="bagiLogistik" href="/" class="btn btn-lg btn-success">Cetak</a></center>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop