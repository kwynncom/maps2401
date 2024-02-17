class GooMaps2401Dyn1Cl {

	constructor(htid, markers) {
		
		this.omso = {};
		this.omsa = [];

		this.bounds = new google.maps.LatLngBounds();
	
		const map = this.omap = new google.maps.Map(document.getElementById(htid),
		{	
			disableDefaultUI: false
		});
		
		this.map = map;
		
		this.markers(markers);
		
		map.fitBounds(this.bounds);
		
		new markerClusterer.MarkerClusterer({ markers: this.omsa, map: map });



	} // func
	

	
	markers(a) {
		for (let i=0; i < a.length; i++) this.markers20(a[i]);
	}
	
	markers20(a) {
		
		const pos = { lat: a['lat'], lng: a['lng']};
		
		this.bounds.extend(pos);
		
		const marid = a['cuid'].toString();
		this.omso[marid] = pos;
		
		const m = new google.maps.Marker(
		{	position: pos,
			label: marid	});		
		
		this.omsa.push(m);
	}

}
