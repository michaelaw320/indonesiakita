@extends("layout")
@section("css")
	<style type="text/css">
		#map-canvas {
			width: 100%;
			height: 548px;
		}
		.mini-map-canvas {
			width: 100%;
			height: 200px;
		}
		.panel-google-plus {
		    position: relative;
		    border-radius: 0px;
		    border: 1px solid rgb(216, 216, 216);
		    font-family: 'Roboto', sans-serif;
		}
		.panel-google-plus > .dropdown {
		    position: absolute;
		    top: 5px;
		    right: 15px;
		}
		.panel-google-plus > .dropdown > span > span {
		    font-size: 10px;   
		}
		.panel-google-plus > .dropdown > .dropdown-menu {
		    left: initial;
		    right: 0px;
		    border-radius: 2px;
		}
		.panel-google-plus > .panel-google-plus-tags {
		    position: absolute;
		    top: 35px;
		    right: -3px;
		}
		.panel-google-plus > .panel-google-plus-tags > ul {
		    list-style: none;
		    padding: 0px;
		    margin: 0px;
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover {
		    box-shadow: 0px 0px 3px rgb(0, 0, 0);   
		    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);   
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li {
		    display: block;
		    right: 0px;
		    width: 0px;
		    padding: 5px 0px 5px 0px;
		    background-color: rgb(245, 245, 245);
		    font-size: 12px;
		    overflow: hidden;
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li::after {
		    content:"";
		    position: absolute;
		    top: 0px;
		    right: 0px;
		    height: 100%;
			border-right: 3px solid rgb(66, 127, 237);
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover > li,
		.panel-google-plus > .panel-google-plus-tags > ul > li:first-child {
		    padding: 5px 15px 5px 10px;
		    width: auto;
		    cursor: pointer;
		    margin-left: auto;
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover > li {
		    background-color: rgb(255, 255, 255);   
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li:hover {
		    background-color: rgb(66, 127, 237);
		    color: rgb(255, 255, 255);
		}
		.panel-google-plus > .panel-heading,
		.panel-google-plus > .panel-footer {
		    background-color: rgb(255, 255, 255);
		    border-width: 0px; 
		}
		.panel-google-plus > .panel-heading {
		    margin-top: 20px;    
		    padding-top: 0px;
		    padding-bottom: 0px;
		}
		.panel-google-plus > .panel-heading > img { 
		    margin-right: 15px;
		}
		.panel-google-plus > .panel-heading > h3 {
		    margin: 0px;
		    font-size: 14px;
		    font-weight: 700;
		}
		.panel-google-plus > .panel-heading > h5 {
		    color: rgb(153, 153, 153);
		    font-size: 12px;
		    font-weight: 400;
		}
		.panel-google-plus > .panel-body {
		    padding-top: 10px;
		    font-size: 13px;
		    padding-bottom: 10px;
		}
		.panel-google-plus > .panel-body > .panel-google-plus-image {
		    display: block;
		    text-align: center;
		    background-color: rgb(245, 245, 245);
		    border: 1px solid rgb(217, 217, 217);
		}
		.panel-google-plus > .panel-body > .panel-google-plus-image > img {
		    max-width: 100%;
		}

		.panel-google-plus > .panel-footer {
		    padding-top: 0px;
		    padding-bottom: 0px;
		    margin-bottom: 10px;
		    font-size: 14px;
		    font-weight: 700;
		}
		.panel-google-plus > .panel-footer > .btn {
		    float: left;
		    margin-right: 8px;
		}
		.panel-google-plus > .panel-footer > .input-placeholder {
		    display: block;
		    margin-left: 98px;
		    color: rgb(153, 153, 153);
		    font-size: 12px;
		    font-weight: 400;
		    padding: 8px 6px 7px;
		    border: 1px solid rgb(217, 217, 217);
		    border-radius: 2px;
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		}
		.panel-google-plus.panel-google-plus-show-comment > .panel-footer > .input-placeholder {
		    display: none;   
		}
		.panel-google-plus > .panel-google-plus-comment {
		    display: none;
		    padding: 10px 20px 15px;
		    border-top: 1px solid rgb(229, 229, 229);
		    background-color: rgb(245, 245, 245);
		}
		.panel-google-plus.panel-google-plus-show-comment > .panel-google-plus-comment {
		    display: block;
		}
		/*.panel-google-plus > .panel-google-plus-comment > img {
		    float: left;   
		}*/
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea {
		    float: right;
		    width: calc(100% - 56px);
		}
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > textarea {
		    display: block;
		    /*margin-left: 60px;
		    width: calc(100% - 56px);*/
		    width: 100%;
		    background-color: rgb(255, 255, 255);
		    border: 1px solid rgb(217, 217, 217);
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		    resize: vertical;
		}
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
		    margin-top: 10px;
		    margin-right: 8px;
		    width: 100%;
		}
		@media (min-width: 992px) {
		    .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
		        width: auto;
		    }    
		}
		.panel-google-plus .btn {
		    border-radius: 3px;   
		}
		.panel-google-plus .btn-default {
		    border: 1px solid rgb(217, 217, 217);
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		}
		.panel-google-plus .btn-default:hover, 
		.panel-google-plus .btn-default:focus, 
		.panel-google-plus .btn-default:active {
		    background-color: rgb(255, 255, 255);
		    border-color: rgb(0, 0, 0);    
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<div class="row">
			<div class="[ col-xs-12 col-sm-6 ]">
				<div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-footer">
	                	<h3>Status : <select class="form-control" style="display: inline; width:auto;"><option>Sibuk</option><option>Siap Sedia</option></select></h3>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-body">
	                	<textarea style="resize: none; width: 100%; border: none;" placeholder="Tuliskan notifikasi"></textarea>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>(Posisi sekarang)
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-1" class="mini-map-canvas"></div>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-heading">
	                    <h3>Adiguna Sucipto</h3>
	                    <h5><span>Jun 27, 2014</span></h5>
	                </div>
	                <div class="panel-body">
	                    <p>Saya membutuhkan pertolongan pertama secepatnya sekarang juga. Siapapun yang bisa membantu tolong ke sini sesegara mungkin.</p>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-2" class="mini-map-canvas"></div>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-heading">
	                    <h3>Ridwan Kamil</h3>
	                    <h5><span>Jun 27, 2014</span></h5>
	                </div>
	                <div class="panel-body">
	                    <p>Saya membutuhkan 3 orang untuk membantu saya dalam mengangkat orang yang tertimpa batu.</p>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-3" class="mini-map-canvas"></div>
	                </div>
	            </div>
	        </div>
			<div class="[ col-xs-12 col-sm-6 ]">
	            <div id="map-canvas"></div>
	        </div>
		</div>
	</div>
@stop
@section("javascript")
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
	<script type="text/javascript">
		$("textarea").autosize();
	   $('.panel-google-plus > .panel-footer > .map, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
	        var $panel = $(this).closest('.panel-google-plus');
	            $comment = $panel.find('.panel-google-plus-comment');
	        $panel.toggleClass('panel-google-plus-show-comment');
	   });
	</script>
	<script type="text/javascript">
		/* Fill in your javascript */
		var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		var mapOptions = {
			zoom: 17,
			center: stockholm
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		var mapdummy = new google.maps.Map(document.getElementById('map-dummy-1'),mapOptions);
		var mapdummy2 = new google.maps.Map(document.getElementById('map-dummy-2'),mapOptions);
		var mapdummy3 = new google.maps.Map(document.getElementById('map-dummy-3'),mapOptions);
	</script>
	<script type="text/javascript">
		// $("#laporan").addClass("active");
		// $("#notifikasiContainer").hide();
		// $(".nav-tabs li").click(function() {
		// 	$(".nav-tabs li").each(function(index) {
		// 		if ($(this).hasClass("active")) {
		// 			$(this).removeClass("active");
		// 			$("#"+$(this).attr('id')+"Container").hide();
		// 		}
		// 		else {
		// 			$(this).addClass("active");
		// 			$("#"+$(this).attr('id')+"Container").show();
		// 		}
		// 	});
		// });
		// var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		// var locvolcano = new google.maps.LatLng(-6.8815501,107.604016);
		// var loccamp = new google.maps.LatLng(-6.8815401,107.604816);
		// var locuser1 = new google.maps.LatLng(-6.8813501,107.604116);
		// var locuser2 = new google.maps.LatLng(-6.8813601,107.604216);
		// var locuser3 = new google.maps.LatLng(-6.8813751,107.604316);
		// var locuser4 = new google.maps.LatLng(-6.8813801,107.604416);
		// var locuser5 = new google.maps.LatLng(-6.8813951,107.604756);
		// var lochelp = new google.maps.LatLng(-6.8813151,107.604856);
		// var map;

		// function initialize() {
		// 	var mapOptions = {
		// 		zoom: 17,
		// 		center: stockholm
		// 	};
		// 	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		// 	volcanomarker = new google.maps.Marker({
		// 		map:map,
		// 		position: locvolcano,
		// 		title : 'Gunung Sinabung Meletus',
		// 		icon : '{{ URL::asset('img/volcano.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	campmarker = new google.maps.Marker({
		// 		map:map,
		// 		position: loccamp,
		// 		title : 'Posco1',
		// 		icon : '{{ URL::asset('img/camp.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	helpmarker = new google.maps.Marker({
		// 		map:map,
		// 		position: lochelp,
		// 		icon : '{{ URL::asset('img/help.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	usermarker1 = new google.maps.Marker({
		// 		map:map,
		// 		position: locuser1,
		// 		title : 'Jill : Sibuk',
		// 		icon : '{{ URL::asset('img/user.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	usermarker2 = new google.maps.Marker({
		// 		map:map,
		// 		position: locuser2,
		// 		title : 'Stephen : Menuju Lokasi',
		// 		icon : '{{ URL::asset('img/user.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	usermarker3 = new google.maps.Marker({
		// 		map:map,
		// 		position: locuser3,
		// 		title : 'Jack : Siap sedia',
		// 		icon : '{{ URL::asset('img/user.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	usermarker4 = new google.maps.Marker({
		// 		map:map,
		// 		position: locuser4,
		// 		title : 'Eve : Menuju Lokasi',
		// 		icon : '{{ URL::asset('img/user.png') }}',
		// 		size: new google.maps.Size(1, 32),
		// 	});
		// 	var infowindow = new google.maps.InfoWindow({
		// 	  content:"Persediaan:<br>Air: 200L<br>Makanan: 200 unit<br>Pakaian: 100"
		// 	  });

		// 	google.maps.event.addListener(campmarker, 'click', function() {
		// 	  infowindow.open(map,campmarker);
		// 	  });
		// }
		// google.maps.event.addDomListener(window, 'load', initialize);
		
		// var x = document.getElementById("location");
		// function getLocation() {
		// 	if (navigator.geolocation) {
		// 		navigator.geolocation.getCurrentPosition(showPosition);
		// 	} else {
		// 		x.innerHTML = "Geolocation is not supported by this browser.";
		// 	}
		// }
		// function showPosition(position) {
		// 	x.innerHTML = "Latitude: " + position.coords.latitude + 
		// 	"<br>Longitude: " + position.coords.longitude; 
		// }
	</script>
@stop