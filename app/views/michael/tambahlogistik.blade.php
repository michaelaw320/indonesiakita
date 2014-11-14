@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1> Tambah data logistik </h1>
		<br>
		<form class="form"> 
			Jenis Logistik: <select class="form-control">
						  <option>Beras</option>
						  <option>Air</option>
						  <option>Other</option>
						  <!-- TODO nanti kalau dipilih other dia bisa input yg laen, tolong dilengkapin -->
						</select>
		</form>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop