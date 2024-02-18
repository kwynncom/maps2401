<?php
	require_once(__DIR__ . '/placeholder.html');
	exit(0);
?>
<?php define('KWGM2401_DYN1_V', '2024/02/06 PM (19:23)');  

require_once('./tmpl/t30_dat.php'); 
?>
  
<link rel='stylesheet' href="../maps.css">
<style>
    body { font-family: sans-serif; }

	#map {
		width : 80vw;
		height: 80vh;
		border: thin solid black;
		position: absolute;
		left: 0;
		top:  0;
	}
	
    .mp05 {  
			width: 100%;
			height: 100%;
			margin: auto;
			position: relative;
	}
	
	.mp10 { 
		position: relative; 
		width: 90vw;
		height: 90vh;
	}
	
	#result {
		margin: 0.9em;
		width: 100%;
		font-size: 130%;
		visibility: hidden; 

	}
	
	#clbtn {
		display: block;
		font-size: 150%;
		margin: auto;
		font-weight: bold;
		visibility: hidden;
	}
	
	.btnp10 { 
		width: 15vw;
		margin-top: 1em;
		position: absolute;
		right: 0;
		top: 0;
	}
	
	pre { 
		font-size: 150%;
	}
	
	.polyb10 { font-size: 130%; }
</style>

</head>
<body>
	<div>
		<div class='mp05'>
			<div id='map'></div> <!-- THE MAP ITSELF -->
			<div class='btnp10'>
				<button class='polyb10' onclick='GLTHEDMO.vis10(true);' id='dp10btn'>draw polygon</button>
			<button id='clbtn' onclick='GLTHEDMO.clear();'>clear</button>
			<div id='result'></div>
			</div>


		</div>
	</div>

</body>
<!-- <?php echo(KWGM2401_DYN1_V); ?> -->
</html>
