@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		.main-table {
			width: 100%;
			height: 100%;
		}
		.reportnotiftable {
			width: 400px;
			height: 300px;
		}

		.button1 {
			height:100px;
			width:100px;
		}
		
	</style>
@stop
@section("content")
	<div class="starter-template">
		<!-- Fill in your content -->
		<br><br>
		<table class="main-table">
			<tr>
				<td style="text-align:left;vertical-align:top;padding:0">
					<p> Hi,Charisma </p>
					<p>Your Coordinate is
					<span id = "location">Press Refresh Button</span>
					<button onclick="getLocation()"><img src="{{ URL::asset('img/refresh.png') }}" width = "30px" height = "25px"></button></p>
					<p>Your Member are : </p>
					<table class="table table-striped table-bordered table-hover table-condensed" width = "50%">
						<tr>
							<th>Name</th>
							<th>Status</th> 
							<th>Latitude</th>
							<th>Longitude</th>
						</tr>
						<tr>
							<td>Jill</td>
							<td>Ongoing</td>
							<td>107.60401689999999</td> 
							<td>-6.8815501999999995</td>
						</tr>
						<tr>
							<td>Eve</td>
							<td>Busy</td> 
							<td>110.60401689999999</td>
							<td>-8.8815501999999995</td>
						</tr>
						<tr>
							<td>Jack</td>
							<td>On the way</td> 
							<td>111.60401689999999</td>
							<td>-6.8815501999999995</td>
						</tr>
						<tr>
							<td>Stephen</td>
							<td>Busy</td> 
							<td>118.60401689999999</td>
							<td>-7.5815501999999995</td>
						</tr>
					</table>
				</td>
				<td>
					<table width = "50%" border ="1" class = "reportnotiftable">
						<tr>
							<td><button class="btn btn-info" style="height:50px;width:200px" border = "0">Report</button></td>
							<td><button class="btn btn-info" style="height:50px;width:200px" border = "0">Notification</button></td>
						</tr>
						<tr>
							<td align ="left" style="text-align:left;vertical-align:top;padding:0">
							Ditemukan beberapa orang terkurung dibawah benda diperlukan bantuan secepatnya</td>
						</tr>
						<tr>	
							<td align ="left" style="text-align:center;vertical-align:top;padding:0">Write a notification..</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		
	</div>
@stop
@section("javascript")
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