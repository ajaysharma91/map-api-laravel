<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Access Google Maps API in PHP</h1></center>
		<div id="map"></div>
    </div>
    <script>
    function loadMap() {
    alert("helo");
	var pune = {lat: 18.5204, lng: 73.8567};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: pune
    });
    console.log("hrkkhui");
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw5On-ZxPa88EQzCKsaYkw4fwvPS0obbI&callback=loadMap">
</script>
<!-- <script type="text/javascript" src="/js/register.js"></script> -->

</body>


</html>