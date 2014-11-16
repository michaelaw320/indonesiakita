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
				<li><a href="update">Update Data</a></li>
				<li><a href="userrole">Pembagian Tugas</a></li>
				<li class="active"><a href="request">Lihat Request<span class="sr-only">(current)</span></a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<!-- TODO modify code below, user request seperti carousel di page contoh -->
		<div id="lihatrequest">
			<table class="table">
				<tr>
					<td>
						<img src="{{ URL::asset('img/cover_lihat_request.jpg') }}">
					</td>
				</tr>
			</table>
		</div>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9999999999">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
				<div class="col-md-6 col-md-offset-3" align="center">
				  <table class="table">
				  <td>
					<img src="{{ URL::asset('img/applicant1.jpg') }}"  height="270" width="187">
				  </td>
				  <td><b>
					Nama <br>
					Umur <br>
					Tinggi <br>
					Berat Badan <br>
					Catatan Medis <br>
					Mayor <br>
					Minor <br>
					Asal Organisasi <br>
					Link CV <br>
				  </b></td>
				  <td>
					Oscar De La Hoya <br>
					41 <br>
					179cm <br>
					75kg <br>
					Tidak ada alergi <br>
					Terapis <br>
					Pertolongan Pertama <br>
					WHO <br>
					http://www.dropbox.com/ <br>
				  </td>
				  </table>
				  <br>
				Tentukan peran: 
				  <select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
				  </select>
				  <br>
				  <button type="button" class="btn btn-danger">Tolak</button>
				  <button type="button" class="btn btn-primary">Terima</button>
				  <br>
				</div>
			</div>
          </div>
          <div class="item">
            <div class="row">
				<div class="col-md-6 col-md-offset-3" align="center">
				  <table class="table">
				  <td>
					<img src="{{ URL::asset('img/applicant2.jpg') }}" height="270" width="187">
				  </td>
				  <td><b>
					Nama <br> <br> <br>
					Umur <br>
					Tinggi <br>
					Berat Badan <br>
					Catatan Medis <br>
					Mayor <br>
					Minor <br>
					Asal Organisasi <br>
					Link CV <br>
				  </b></td>
				  <td>
					Prof. Dr. Dr-Eng. dr. drg. ir. Reinaldo Michael Hasiandehlu, ST, MT, MCD, KFC, PHD, BMC, KYT <br>
					20 <br>
					179cm <br>
					75kg <br>
					Tidak ada alergi <br>
					Terapis <br>
					Pertolongan Pertama <br>
					WHO <br>
					http://www.dropbox.com/ <br>
				  </td>
				  </table>
				  <br>
				Tentukan peran: 
				  <select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
				  </select>
				  <br>
				  <button type="button" class="btn btn-danger">Tolak</button>
				  <button type="button" class="btn btn-primary">Terima</button>
				  <br>
				</div>
			</div>
          </div>
          
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop