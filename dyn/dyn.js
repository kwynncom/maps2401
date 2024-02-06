class GooMaps2401Dyn1Cl {

	constructor(htid, centlat, centlng, zoom, markers) {

		const map = this.omap = new google.maps.Map(document.getElementById(htid),
		{	center: {lat: centlat, lng: centlng }, 
			zoom: zoom    });
		
		this.markers(markers);

		const drawingManager = new google.maps.drawing.DrawingManager({
			drawingMode: google.maps.drawing.OverlayType.POLYGON,
			drawingControl: false  });

		drawingManager.setMap(map); // associate drawing tools with map

		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
			const coordinates = (polygon.getPath().getArray());	 });
	} // func
	
	markers(a) {
		for (let i=0; i < a.length; i++) this.markers20(a[i]);
	}
	
	markers20(a) {
		new google.maps.Marker(
		{	position: { lat: a[0], lng: a[1]},
			map: this.omap,
			title: a[2]	});		
	}

}