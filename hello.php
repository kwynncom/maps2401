<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'    />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<title>Big Evil Goo(gle) Maps polygon</title>

<?php define('KWGM2401_HELLO_V', '2024/02/06 19:29');  ?>

<script> 	
	function initMap() { initMapActual(); } // defined here so it's above the Goo API inclusion just below; otherwise this function is undefined
</script>

<?php require_once('getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>

<script>
	
function initMapActual(){
	
    const map = new google.maps.Map(document.getElementById('map'), // the element is defined in the body below 
	{	center: {lat: 34.2726562, lng: -83.8332973 }, // Gainesville, Georgia, USA
        zoom: 12    });
    
	new google.maps.Marker(
	{	position: { lat: 34.2696248, lng: -83.819695},
		map,
		title: "Hello World!"	});

	const drawingManager = new google.maps.drawing.DrawingManager({
		drawingMode: google.maps.drawing.OverlayType.POLYGON,
		drawingControl: false  });
	
	drawingManager.setMap(map); // associate drawing tools with map
	
	google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
		const coordinates = (polygon.getPath().getArray());	 });

} // end initMapInner() / Actual func
</script>
  
<link rel='stylesheet' href="maps.css">
<style>
    body { font-family: sans-serif; }

    #map {  width : 40em;
			height: 35em;
			border: thin solid black;    }
</style>
</head>
<body>
	<div style='margin: 0.7em; font-size: 120%;'>
		<div class='menu10'>
			<a href='./doc/mapsPolygonDoc.html'>discussion</a>
		</div>
		<div class='menu10'>see <a href='./dyn/dyn.php'>polygon 1</a></div>
		<div class='menu10'> <a href='./large/large.php'>large map</a>
		<div class='menu10'>v: <?php echo(KWGM2401_HELLO_V); ?>
			
		</div>
	</div>
	<div id='map'></div> <!-- THE MAP ITSELF -->
</body>
<!-- <?php echo(KWGM2401_HELLO_V); ?> -->
</html>
