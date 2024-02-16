<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'    />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<title>Big Evil Goo(gle) Maps polyline</title>

<?php define('KWGM2401_HELLO_V', '2024/02/16 1');  ?>

<script> 	
	function initMap() { initMapActual(); } // defined here so it's above the Goo API inclusion just below; otherwise this function is undefined
</script>

<?php require_once('getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=geometry"></script>

<script>
	
function initMapActual(){
	// 
	
    const map = new google.maps.Map(document.getElementById('map'), // the element is defined in the body below 
	
	
	{	center: {lat:  34.3008941, lng: -84.0622422 }, 
        zoom: 13.17    });
    
	const polylineEnc = 'ivfpE~ad`OA|@J|@Dt@L~@Tx@d@hAn@dAdB~AvAlAv@l@~BtBvBjBNP`@ZNZ';
	const points = google.maps.geometry.encoding.decodePath(polylineEnc);

	const polyline = new google.maps.Polyline({path : points});
	polyline.setMap(map);


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
