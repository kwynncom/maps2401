var GLTHEDMO;

class drawCl {
	
	constructor() {
		this.init();
		GLTHEDMO = this;
	}
	
	init() {

		const drawingManager = new google.maps.drawing.DrawingManager({
				drawingMode: google.maps.drawing.OverlayType.POLYGON,
				drawingControl: false  });

		this.drawingManager = drawingManager;
		
		// this.vis10(true);

		const self = this;
		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
			self.polygon = polygon;
			const coordinates = (polygon.getPath().getArray());	 
				new GooMaps2401Dyn1PolyCl(coordinates);
			self.vis10(false);
		});
		

	}
	
	vis10(dir) {
		if (!dir) {
			dir = false;
			if (this.polygon) this.polygon.setVisible(false);
		} else {
			GLRESULTO.set();
		}
		
		const e = byid('dp10btn');
		e.disabled = e.readOnly = dir;
		byid('clbtn').style.visibility = (!dir) ? 'hidden' : 'visible';
		
		const setto = dir ? KWGM2402KMO.map : null;
		this.drawingManager.setMap(setto);
	}
	
	clear() {

		this.vis10(false);

	}
		
}
