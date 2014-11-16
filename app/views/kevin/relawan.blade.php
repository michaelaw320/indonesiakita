@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		#map-canvas {
			height: 430px;
			width : 100%;
		}
		.tableContainer {
			border: 1px solid #DDD;
			border-top: 0px;
			width: 100%;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1>Halo Jill, </h1>
		<div class="row">
			<div class="col-sm-9 col-md-9">
				<p>Lokasi anda adalah
					<span id="location">Press Refresh Button</span>
					<button onclick="getLocation()"><img src="{{ URL::asset('img/refresh.png') }}" width = "30px" height = "25px"></button>
				</p>
				<p>Status anda saat ini adalah
					<span id="status">Sibuk</span>
					<button onclick="getLocation()"><img src="{{ URL::asset('img/refresh.png') }}" width = "30px" height = "25px"></button>
				</p>
				<div id="map-canvas"></div>
			</div>
			<div class="col-sm-3 col-md-3">
				<ul class="nav nav-tabs" role="tablist">
					<li id="laporan" role="presentation" class="active tab"><a href="#">Laporan</a></li>
					<li id="notifikasi" role="presentation" class="tab"><a href="#">Notifikasi</a></li>
				</ul>
				<table class="tableContainer" id="laporanContainer">
					<tr>
						<td>
							<p>
								Jill: Berhasil menyelamatkan 2 orang yang tertimbun di Lat -7.8904922 Long 103.609528 di Komplek Bunga. (10:30AM)
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<form>
								<input class="form-control" type="text" placeholder="Tuliskan laporan anda">
							</form>
						</td>
					</tr>
				</table>
				<table class="tableContainer" id="notifikasiContainer">
					<tr>
						<td>
							<p>
								Charisma: Segera pergi ke lokasi Lat -7.8904922 Long 103.609528 di Komplek Bunga. Butuh sekitar 5 orang, ada korban yang tertimbun (10:00AM)
							</p>
							<p>
								Charisma: Segera pergi ke lokasi Lat -6.7304922 Long 107.209528 di SMAN 3. Butuh bantuan medis, korban mengalami luka bakar. (11:33AM)
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		$("#laporan").addClass("active");
		$("#notifikasiContainer").hide();
		$(".nav-tabs li").click(function() {
			$(".nav-tabs li").each(function(index) {
				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$("#"+$(this).attr('id')+"Container").hide();
				}
				else {
					$(this).addClass("active");
					$("#"+$(this).attr('id')+"Container").show();
				}
			});
		});
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
    <script>
		var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		var parliament = new google.maps.LatLng(-6.8815501,107.604016);
		var marker;
		var map;

		function initialize() {
		  var mapOptions = {
			zoom: 13,
			center: stockholm
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
				  mapOptions);

		  marker = new google.maps.Marker({
			map:map,
			position: parliament
		  });
		  google.maps.event.addListener(marker, 'click', toggleBounce);
		}

		function toggleBounce() {
		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addListener(marker, "rightclick", function() {
				marker.setIcon('http://icons.iconarchive.com/icons/yellowicon/game-stars/256/Mario-icon.png');
		});
	    </script>
		<script>
		var x = document.getElementById("location");
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		function showPosition(position) {
			x.innerHTML = "Latitude: " + position.coords.latitude + 
			"<br>Longitude: " + position.coords.longitude; 
		}
	</script>
	<script type="text/javascript">
		/* Fill in your javascript */
		var x = document.getElementById("location");

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else { 
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) {
			x.innerHTML = "Latitude: " + position.coords.latitude + 
			" Longitude: " + position.coords.longitude;	
		}
	</script>
@stop