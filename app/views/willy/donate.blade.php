@extends("layout")
@section("css")
	<style type="text/css">
		#splash {
			width: 100%;
		}
	</style>
@stop
@section("content")
	<img id="splash" src="{{ URL::asset('img/splash-donate.jpg') }}">
	<div class="starter-template">
		<h1>Donasi</h1>
		<form class="form">
			Nama :

		</form>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop