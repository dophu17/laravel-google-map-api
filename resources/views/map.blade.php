<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>My First Google Map</h1>

	<div id="googleMap" style="width:100%;height:400px;"></div>

	<script>
		function initMap() {
			var mapProp= {
			    center:new google.maps.LatLng(10.8093291,106.6786752),
			    zoom:13,
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker=new google.maps.Marker({
			  	position: new google.maps.LatLng(10.806431,106.6775808),
		  	});
			marker.setMap(map);

			google.maps.event.addListener(marker, 'click', function(event) {
			    placeMarker(map, event.latLng);
		  	});
		}

		function placeMarker(map, location) {
		  	var marker = new google.maps.Marker({
			    position: location,
			    map: map
		  	});
		  	var infowindow = new google.maps.InfoWindow({
		    	content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
		  	});
		  	infowindow.open(map,marker);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmH3h8ZX2KYFZ0SZW5UW1ra1jmXhJxVH0&callback=initMap"></script>
	<!--
	To use this code on your website, get a free API key from Google.
	Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
	-->
</body>
</html>