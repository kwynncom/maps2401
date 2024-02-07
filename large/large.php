<?php define('KWGM2401_DYN1_V', '2024/02/06 PM (19:23)');  

require_once('./tmpl/t30_dat.php'); ?>
  
<link rel='stylesheet' href="../maps.css">
<style>
    body { font-family: sans-serif; }

	#map {
		width : 90vw;
		height: 90vh;
		border: thin solid black; 		
	}
	
    .mp05 {  
			width: 100%;
			height: 100%;
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
		margin-top: 1em;
	}
	
	pre { 
		font-size: 150%;
	}
</style>

</head>
<body>
	<div>
		<div class='mp05'>
			<div id='map'></div> <!-- THE MAP ITSELF -->
			<div class='btnp10'>
			<button id='clbtn' onclick='KWGM2402KMO.clear();'>clear</button>
			</div>
			<pre id='result'></pre>

		</div>
	</div>

</body>
<!-- <?php echo(KWGM2401_DYN1_V); ?> -->
</html>
