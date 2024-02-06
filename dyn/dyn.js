class GooMaps2401Dyn1Cl {

	constructor(htid, centlat, centlng, zoom, markers) {
		
		this.oms = {};

		const map = this.omap = new google.maps.Map(document.getElementById(htid),
		{	center: {lat: centlat, lng: centlng }, 
			zoom: zoom    });
		
		this.markers(markers);

		const drawingManager = new google.maps.drawing.DrawingManager({
			drawingMode: google.maps.drawing.OverlayType.POLYGON,
			drawingControl: false  });

		drawingManager.setMap(map);

		const self = this;
		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
			const coordinates = (polygon.getPath().getArray());	 
			GooMaps2401Dyn1PolyF(coordinates, self.oms);
		});
	} // func
	
	markers(a) {
		for (let i=0; i < a.length; i++) this.markers20(a[i]);
	}
	
	markers20(a) {
		
		const pos = { lat: a[0], lng: a[1]};
		const mid = a[2];
		this.oms[mid] = pos;
		
		new google.maps.Marker(
		{	position: pos,
			map: this.omap,
			title: mid	});		
	}

}