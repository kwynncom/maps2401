<?php require_once(__DIR__ . '/t10.php'); ?>
<?php require_once(__DIR__ . '/t20.php'); ?>

<script>
	const GooMaps2401Dyn1_MARKERS_GL = <?php echo(json_encode(maps2401GetDatCl::get('markers'), JSON_PRETTY_PRINT)); ?>;
</script>

<script src='/opt/kwynn/js/utils.js'></script>

<script>var KWGM2402KMO;</script>
<script src='polygon.js'></script>
<script src='dyn.js'></script>

<script>
	
function initMap() {
	KWGM2402KMO = new GooMaps2401Dyn1Cl('map', 
		<?php echo(json_encode(maps2401GetDatCl::get('mapCenter'))); ?>,
		<?php echo(maps2401GetDatCl::get('mapZoom'	   )); ?>,					
		GooMaps2401Dyn1_MARKERS_GL
	);
}
</script>

<?php require_once(__DIR__ . '/../../' . 'getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>
