<?php define('KWGM201_DYN1_V', '2024/02/06 00:44');  ?>

<?php require_once(__DIR__ . '/tmpl/t10.php'); ?>
<?php require_once(__DIR__ . '/tmpl/t20.php'); ?>

<script src='/opt/kwynn/js/utils.js'></script>
<script src='polygon.js'></script>
<script src='dyn.js'></script>

<?php require_once(__DIR__ . '/tmpl/t30_dat.php'); ?>
<script>
function initMap() {
	new GooMaps2401Dyn1Cl('map', 
		<?php echo(maps2401GetDatCl::get('mapCenterLat')); ?>,
		<?php echo(maps2401GetDatCl::get('mapCenterLng')); ?>,
		<?php echo(maps2401GetDatCl::get('mapZoom'	   )); ?>,					
		GooMaps2401Dyn1_MARKERS_GL
	);
}
</script>

<?php require_once(__DIR__ . '/../' . 'getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>
  
<link rel='stylesheet' href="../maps.css">
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
			<a href='../'>hello world</a>
		</div>
		<div class='menu10'>version: <?php echo(KWGM201_DYN1_V); ?>
			
		</div>
	</div>
	<div id='map'></div> <!-- THE MAP ITSELF -->
</body>
<!-- <?php echo(KWGM201_DYN1_V); ?> -->
</html>
