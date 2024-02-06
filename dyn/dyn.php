<?php define('KWGM201_DYN1_V', '2024/02/06 00:44');  ?>

<?php require_once(__DIR__ . '/tmpl/t10.php'); ?>
<?php require_once(__DIR__ . '/tmpl/t20.php'); ?>

<script src='/opt/kwynn/js/utils.js'></script>

<script>var KWGM2402KMO;</script>
<script src='polygon.js'></script>
<script src='dyn.js'></script>

<?php require_once(__DIR__ . '/tmpl/t30_dat.php'); ?>
<script>
	
function initMap() {
	KWGM2402KMO = new GooMaps2401Dyn1Cl('map', 
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

	#map {
		width : 25em;
		height: 20em;
		border: thin solid black; 		
	}
	
    .mp05 {  
			width: 26em;
			height: 23em;
			margin: auto;
	}
	
	.mp10 { 
		position: relative; 
		width: 90vw;
		height: 90vh;
	}
	
	#result {
		margin: 0.9em;
		text-align: center; 
		width: 100%;
		height: 1.3em;
	}
	
	#clbtn {
		display: block;
		font-size: 150%;
		margin: auto;
		font-weight: bold;
		visibility: hidden;
	}
	
	.btnp10 { 
		width: 100%;
		text-align: center;
	}
</style>

</head>
<body>
	<div style='margin: 0.7em; font-size: 120%;'>
		<div class='menu10'>
			earlier <a href='../'>hello world</a>
		</div>
		<div class='menu10'>This map's version: <?php echo(KWGM201_DYN1_V); ?>
			
		</div>
	</div>
	<div >
		<div class='mp05'>
			<div id='map'></div> <!-- THE MAP ITSELF -->
			<div id='result'></div>
			<div id='btnp10'>
			<button id='clbtn' onclick='KWGM2402KMO.clear();'>clear</button>
			</div>
		</div>
	</div>

</body>
<!-- <?php echo(KWGM201_DYN1_V); ?> -->
</html>
