class GooMaps2401Dyn1Cl {

	constructor(htid, centlat, centlng, zoom, markers) {
		
		this.oms = {};

		const map = this.omap = new google.maps.Map(document.getElementById(htid),
		{	center: {lat: centlat, lng: centlng }, 
			zoom: zoom,
			disableDefaultUI: true
		});
		
		this.markers(markers);

		const drawingManager = new google.maps.drawing.DrawingManager({
			drawingMode: google.maps.drawing.OverlayType.POLYGON,
			drawingControl: false  });

		drawingManager.setMap(map);

		const self = this;
		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
			self.polygon = polygon;
			const coordinates = (polygon.getPath().getArray());	 
			new GooMaps2401Dyn1PolyCl(coordinates, self.oms);
		});
	} // func
	
	clear() {
		if (this.polygon) this.polygon.setVisible(false);
		inht('result', '');
		byid('clbtn').style.visibility = 'hidden';
	}
	
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
			label: mid	});		
	}

}