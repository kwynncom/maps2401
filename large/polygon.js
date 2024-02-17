class GooMaps2401Dyn1PolyCl {
	constructor(coos) {
	const ms = KWGM2402KMO.omso;
	const mn = ms.length;
	let ins = [];
	
	const poly = new google.maps.Polygon({ paths: coos });
	for (const [k,v] of Object.entries(ms)) {
		let isin = google.maps.geometry.poly.containsLocation(v, poly);
		if (isin) {
			ins.push(k);
		}
	}

	kwjss.sobf('servRecv.php', { selectedMarkers : ins, polygon: coos}, (res) => this.onret(res), false);
	
	
}

onret(res) {
	inht('result', res);
	// byid('clbtn').style.visibility = 'visible';
}

}