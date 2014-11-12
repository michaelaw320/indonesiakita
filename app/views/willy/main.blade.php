@extends("layout")
@section("css")
	<style type="text/css">
		#map {
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1>Jadilah Relawan</h1>
		<p class="lead">Mari kita bantu sesama untuk membuat Indonesia yang lebih baik. <br> Bila setiap dari kita menolong 1 orang tiap hari. Negara Indonesia bakal menjadi negara yang terbahagia.</p>
		<canvas id="map">
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		var canvas = document.getElementById('map');
		canvas.width = 1024;
		canvas.height = 366;
		var context = canvas.getContext('2d');

		var bgCanvas = new Image();
		bgCanvas.src = 'img/map.jpg';
		context.drawImage(bgCanvas, 0, 0, 1024, 366);
		
		var mark = new Image();
		mark.src = 'img/mark.png';
		context.drawImage(mark, 80, 20);
		context.drawImage(mark, 240, 210);
		context.drawImage(mark, 880, 150);
	</script>
@stop