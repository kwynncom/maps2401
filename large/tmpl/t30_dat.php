<?php require_once(__DIR__ . '/t10.php'); ?>
<?php require_once(__DIR__ . '/t20.php'); ?>

<script>
	const GooMaps2401Dyn1_MARKERS_GL = <?php echo(json_encode(maps2401GetRealDatCl::get('markers'), JSON_PRETTY_PRINT)); ?>;
</script>

<script src='/opt/kwynn/js/utils.js'></script>

<script>var KWGM2402KMO;</script>
<script src='polygon.js'></script>
<script src='dyn.js'></script>
<script src='initMap.js'></script>
<script src='draw.js'   ></script>
<script src='result.js'   ></script>

<script>
	
function initMap() {
	KWGM2402KMO = new GooMaps2401Dyn1Cl('map', 
		GooMaps2401Dyn1_MARKERS_GL
	);
	
	GLTHEDMO = new drawCl();
}
</script>



<?php require_once(__DIR__ . '/../../' . 'getKey.php'); ?>

<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>
