<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'    />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<title>Big Evil Goo(gle) Maps polygon</title>

<script src='/opt/kwynn/js/utils.js'></script> <!-- https://github.com/kwynncom/kwynn-php-general-utils -->

<?php define('KWGM2401_V', '2242'); ?>

<script> function initMap() { initMapInner(); } </script>

<!-- https://developers.google.com/maps/documentation/javascript/load-maps-js-api
	 https://developers.google.com/maps/documentation/javascript/examples/drawing-tools
	 https://developers.google.com/maps/documentation/javascript/overview#Loading_the_Maps_API -->

<?php require_once('getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>


<script>
	
function initMapInner(){
	
    const map = new google.maps.Map(document.getElementById('map'), 
	{	center: {lat: 34.2726562, lng: -83.8332973 },
        zoom: 12    });
    
	new google.maps.Marker(
	{	position: { lat: 34.2696248, lng: -83.819695},
		map,
		title: "Hello World!"	});
  
// https://developers.google.com/maps/documentation/javascript/examples/drawing-tools

	const drawingManager = new google.maps.drawing.DrawingManager({
		drawingMode: google.maps.drawing.OverlayType.POLYGON,
		drawingControl: false  });
	
	drawingManager.setMap(map);
	
	// https://developers.google.com/maps/documentation/javascript/drawinglayer
	// https://stackoverflow.com/questions/14407451/how-to-get-point-coordinates-of-a-modified-drawingmanager-shape-googlemaps-api
	google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
		const coordinates = (polygon.getPath().getArray());
		return; });

	google.maps.event.addListener(drawingManager, 'click', () => {
		// called before the map listener
	});
}  // initMapInner() func
</script>
  
<style>
    body { font-family: sans-serif; }

    #map {
      width : 80vw;
      height: 80vh;
      border: thin solid black;
	  text-align: center;
    }
</style>
</head>
<body>
	<div><?php echo(KWGM2401_V); ?></div>
	<div id='map'></div>
</body>
</html>
