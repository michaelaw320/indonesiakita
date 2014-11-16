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
				<table>
				<tr>
					<td>
						Lokasi anda adalah
					</td>
					<td>
						<span id="location">Press Refresh Button</span>
						<button onclick="getLocation()"><img src="{{ URL::asset('img/refresh.png') }}" width = "30px" height = "25px"></button>
					</td>
				</tr>
				<tr>
					<td>
						Status anda saat ini adalah
					</td>
					<td>
						<select class="form-control">
							  <option>Sibuk</option>
							  <option>Menuju Lokasi</option>
							  <option>Siap Sedia</option>
						</select>
					</td>
				</tr>
				</table>
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
								Charisma: Segera pergi ke lokasi Lat -6.8813151 Long 107.604856 di Komplek Bunga. Butuh sekitar 5 orang, ada korban yang tertimbun (10:00AM)
							</p>
							<p>
								Charisma: Segera pergi ke lokasi Lat -6.8813451 Long 107.604856 di SMAN 3. Butuh bantuan medis, korban mengalami luka bakar. (11:33AM)
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@stop
@section("javascript")
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
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
		var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		var locvolcano = new google.maps.LatLng(-6.8815501,107.604016);
		var loccamp = new google.maps.LatLng(-6.8815401,107.604816);
		var locuser1 = new google.maps.LatLng(-6.8813501,107.604116);
		var locuser2 = new google.maps.LatLng(-6.8813601,107.604216);
		var locuser3 = new google.maps.LatLng(-6.8813751,107.604316);
		var locuser4 = new google.maps.LatLng(-6.8813801,107.604416);
		var locuser5 = new google.maps.LatLng(-6.8813951,107.604756);
		var lochelp = new google.maps.LatLng(-6.8813151,107.604856);
		var map;

		function initialize() {
			var mapOptions = {
				zoom: 17,
				center: stockholm
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
			volcanomarker = new google.maps.Marker({
				map:map,
				position: locvolcano,
				title : 'Gunung Sinabung Meletus',
				icon : '{{ URL::asset('img/volcano.png') }}',
				size: new google.maps.Size(1, 32),
			});
			campmarker = new google.maps.Marker({
				map:map,
				position: loccamp,
				title : 'Posco1',
				icon : '{{ URL::asset('img/camp.png') }}',
				size: new google.maps.Size(1, 32),
			});
			helpmarker = new google.maps.Marker({
				map:map,
				position: lochelp,
				icon : '{{ URL::asset('img/help.png') }}',
				size: new google.maps.Size(1, 32),
			});
			usermarker1 = new google.maps.Marker({
				map:map,
				position: locuser1,
				title : 'Jill : Sibuk',
				icon : '{{ URL::asset('img/user.png') }}',
				size: new google.maps.Size(1, 32),
			});
			usermarker2 = new google.maps.Marker({
				map:map,
				position: locuser2,
				title : 'Stephen : Menuju Lokasi',
				icon : '{{ URL::asset('img/user.png') }}',
				size: new google.maps.Size(1, 32),
			});
			usermarker3 = new google.maps.Marker({
				map:map,
				position: locuser3,
				title : 'Jack : Siap sedia',
				icon : '{{ URL::asset('img/user.png') }}',
				size: new google.maps.Size(1, 32),
			});
			usermarker4 = new google.maps.Marker({
				map:map,
				position: locuser4,
				title : 'Eve : Menuju Lokasi',
				icon : '{{ URL::asset('img/user.png') }}',
				size: new google.maps.Size(1, 32),
			});
			var infowindow = new google.maps.InfoWindow({
			  content:"Persediaan:<br>Air: 200L<br>Makanan: 200 unit<br>Pakaian: 100"
			  });

			google.maps.event.addListener(campmarker, 'click', function() {
			  infowindow.open(map,campmarker);
			  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		
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
@stop