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
	
	<!-- TODO: import modulnya kak ikhsan untuk page update, ganti angkanya dengan form text kosong placeholdernya nilai originalnya -->
	
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop