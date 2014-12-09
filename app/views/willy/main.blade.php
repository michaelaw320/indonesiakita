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
		<canvas id="map"></canvas>
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
		var markImg = new Image();
		markImg.src = 'img/mark.png';		
		var marks = [];
		marks.push({
			x: 60,
			y: 15,
		});
		marks.push({
			x: 240,
			y: 210,
		});
		marks.push({
			x: 880,
			y: 150,
		});
		console.log("marks");
		$.each(marks, function(index, mark) {
			context.drawImage(markImg, mark.x, mark.y);
		});
		console.log("marks");
		canvas.addEventListener("mousemove", on_mousemove, false);
		canvas.addEventListener("click", on_click, false);
		//check if the mouse is over the link and change cursor style
		function on_mousemove (ev) {
			var x, y;
			// Get the mouse position relative to the canvas element.
			if (ev.layerX || ev.layerX == 0) { //for firefox
				x = ev.layerX;
				y = ev.layerY;
			}

			//is the mouse over the link?
			var over = false;
			$.each(marks, function(index, mark) {
				if (((mark.x <= x) && (x <= (mark.x+markImg.width))) && ((mark.y <= y) && (y <= (mark.y+markImg.height)))) {
					over = true;
				}
			});
			if (over)
				inLink = true;
		}

		//if the link has been clicked, go to link
		function on_click(e) {
			if (inLink)  {
				window.location = "bencana";
			}
		}
		console.log("gila");
	</script>
@stop