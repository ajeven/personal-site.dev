<!DOCTYPE html>
<html>
<head>
	<title>Weather Map</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'templates.php'; ?>
	<h1>Weather Map</h1>
	<h5 id="city"></h5>
	<div id="container-fluid">
		<div id="weather-map" class="row">
			<div id="day0" class="col-xs-4">
			</div>
			<div id="day1" class="col-xs-4">
			</div>
			<div id="day2" class="col-xs-4">
			</div>
		</div>
	</div>
		<input id="latitude" type="text" hidden>
		<input id="longitude" type="text" hidden>
		<button id="button" class="btn btn-primary" type="button">Update Map</button>
	<div id="map-canvas">
	</div>
<style>
body {
	padding-left: 100px;
	padding-top: 20px;
	padding-right: 100px;
	background-color: lightblue;
}
.col-xs-4 {
	text-align: center;
	border: solid 1px grey;
	padding-top: 10px;
	padding-bottom: 20px;
	background-color: papayawhip;
	
}
h1 {
	text-align: center;
}
#map-canvas {
	width: 994px;
	height: 400px;
	position: relative;
	left: -14px;
	border: solid 1px grey;
}
</style>
<script src="/js/moment.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKF2GyWWZMULMmqcIAIPm7b9nh6WqyHVc">
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script>
(function() {
	"use strict";
	//google map API
	var mapOptions = {
		zoom: 10,
		center: {
			lat: 29.426791,
			lng: -98.489602
		}
	};
	var downTownSA = {lat:29.426791, lng: -98.489602}
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var marker = new google.maps.Marker({
		draggable: true,
		position: downTownSA,
		map: map,
		animation: google.maps.Animation.DROP
	});
	//weatherMap Stuff
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: "923c1f57471f9bce07564f89b1c5cebf",
		q: "San Antonio, TX",
		cnt: 3,
		units: "imperial"
	}).done(function(data) {
	$(".row col-xs-4").html();
	var getWeather = ("");
	data.list.forEach(function(element, i) {

		getWeather = (moment(element.dt*1000).format("MMM Do") + "<p>Temperature: " + Math.round(data.list[i].temp.max) + "&deg;/" + Math.round(data.list[i].temp.min) + "&deg;</p><img src=http://openweathermap.org/img/w/" + data.list[i].weather[0].icon + ".png>" + "<p>Windspeed: " + Math.round(data.list[i].speed) + "</p>" + "<p>Humidity: " + data.list[i].humidity + "</p>");
		$("#day" + i).html(getWeather);
	})
	});
	google.maps.event.addListener(marker, "dragend", function(event) {
		document.getElementById("latitude").value = event.latLng.lat();
		document.getElementById("longitude").value = event.latLng.lng();
	});
	var date = new Date();
	$("#button").on("click", function(){
		var latitude = parseFloat($("#latitude").val());
		var longitude = parseFloat($("#longitude").val());
		$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: "923c1f57471f9bce07564f89b1c5cebf",
		lat: latitude,
		lon: longitude,
		cnt: 3,
		units: "imperial"
	}).done(function(data) {
		map.setCenter({
			zoom: 10,
			lat: latitude,
			lng: longitude
		});
		$("#latitude").val("")
		$("#longitude").val("")
		var getWeather = ("");
		data.list.forEach(function(element, i) {
		getWeather = (moment(element.dt*1000).format("MMM Do") + "<p>Temperature: " + Math.round(data.list[i].temp.max) + "&deg;/" + Math.round(data.list[i].temp.min) + "&deg;</p><img src=http://openweathermap.org/img/w/" + data.list[i].weather[0].icon + ".png>" + "<p>Windspeed: " + Math.round(data.list[i].speed) + "</p>" + "<p>Humidity: " + data.list[i].humidity + "</p>");
		$("#day" + i).html(getWeather);
	});
	});
	})
})();
</script>

</body>
</html>