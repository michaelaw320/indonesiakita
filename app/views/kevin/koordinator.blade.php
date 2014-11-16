@extends("layout")
@section("css")
	<style type="text/css">
		.tableContainer {
			border: 1px solid #DDD;
			border-top: 0px;
			width: 100%;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1> Halo Charisma, </h1>
		<div class="row">
			<div class="col-sm-9 col-md-9">
				<p>Lokasi anda adalah
					<span id="location">Press Refresh Button</span>
					<button onclick="getLocation()"><img src="{{ URL::asset('img/refresh.png') }}" width = "30px" height = "25px"></button>
				</p>
				<p>Anggota anda adalah : </p>
				<table class="table table-striped table-bordered table-hover table-condensed">
					<tr>
						<th>Nama</th>
						<th>Status</th> 
						<th>Latitude</th>
						<th>Longitude</th>
					</tr>
					<tr>
						<td>Jill</td>
						<td>Berlangsung</td>
						<td>107.60401689999999</td> 
						<td>-6.8815501999999995</td>
					</tr>
					<tr>
						<td>Eve</td>
						<td>Sibuk</td> 
						<td>110.60401689999999</td>
						<td>-8.8815501999999995</td>
					</tr>
					<tr>
						<td>Jack</td>
						<td>Lagi di perjalanan</td> 
						<td>111.60401689999999</td>
						<td>-6.8815501999999995</td>
					</tr>
					<tr>
						<td>Stephen</td>
						<td>Sibuk</td> 
						<td>118.60401689999999</td>
						<td>-7.5815501999999995</td>
					</tr>
				</table>
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
							<p>
								Jack: Butuh bantuan medik di Lat -6.7304922 Long 107.209528 di SMAN 3. Ada korban mengalami luka bakar yang serius. (11:32AM)
							</p>
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
					<tr>
						<td>
							<form>
								<input class="form-control" type="text" placeholder="Tuliskan notifikasi anda">
							</form>
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