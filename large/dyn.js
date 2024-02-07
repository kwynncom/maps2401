class GooMaps2401Dyn1Cl {

	constructor(htid, cent, zoom, markers) {
		
		this.oms = {};

		const map = this.omap = new google.maps.Map(document.getElementById(htid),
		{	center: {lat: cent[0], lng: cent[1] }, 
			zoom: zoom,
			disableDefaultUI: false
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
		const marid = a[2];
		this.oms[marid] = pos;
		
		new google.maps.Marker(
		{	position: pos,
			map: this.omap,
			label: marid	});		
	}

}