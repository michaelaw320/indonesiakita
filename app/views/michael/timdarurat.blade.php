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
				<li><a href="request">Lihat Request</a></li>
				<li class="active"><a href="timdarurat">Pembentukan Tim Darurat<span class="sr-only">(current)</span></a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<div id="timDarurat">
			<table class="table">
				<tbody >
					<tr id="judulTabel">
						<td colspan="4">
							<!-- <font color="3CA8F5"><h2>Pembentukan Tim Darurat</h2></font> -->
							<img src="{{ URL::asset('img/cover_tim_darurat2.jpg') }}" width="1140">
						</td>
					</tr>
					<tr id="grupKartu">
						<th id="anggota1" bgcolor="040F40">
							<center><font color="white">
							<img src="{{ URL::asset('img/person1.jpg') }}"  width="200" height="130">
							<h4>Bianca Swift</h4><br>
							<p>32 y.o.</p>
							<p>165cm / 55kg</p>
							<p>Alergi Dingin</p>
							<p>Mayor	: Medik</p>
							<p>Minor 	: Terapik</p>
							</center></font>
						</th>
						<th id="anggota2" bgcolor="071A6B">
							<center><font color="white">
							<img src="{{ URL::asset('img/person2.jpg') }}"  width="200" height="130">
							<h4>Jason Miraz</h4><br>
							<p>35 y.o.</p>
							<p>180cm / 80kg</p>
							<p>Tidak ada penyakit</p>
							<p>Mayor	: Ahli Geologi</p>
							<p>Minor 	: Medik</p>
							</center></font>
						</th>
						<th id="anggota3" bgcolor="0D2A6E">
							<center><font color="white">
							<img src="{{ URL::asset('img/person3.jpg') }}"  width="200" height="130">
							<h4>William Cruise</h4><br>
							<p>33 y.o.</p>
							<p>185cm / 85kg</p>
							<p>Tidak ada penyakit</p>
							<p>Mayor	: Jaringan IT</p>
							<p>Minor 	: -</p>
							</center></font>
						</th>
						<th id="anggota4" bgcolor="253C7A">
							<center><font color="white">
							<img src="{{ URL::asset('img/person4.jpg') }}"  width="200" height="130">
							<h4>Jessica Andrew</h4><br>
							<p>36 y.o.</p>
							<p>163cm / 53kg</p>
							<p>Alergi Debu</p>
							<p>Mayor	: Terapik</p>
							<p>Minor 	: Medik</p>
							</center></font>
						</th>
					</tr>
					<tr >
						<th colspan="4"></th>
					</tr>
					<tr id="tombol">
						<td colspan="4">
							<center><button class="btn btn-primary" type="submit">BENTUK TIM!</button></center>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop