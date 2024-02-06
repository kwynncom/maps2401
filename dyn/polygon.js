class GooMaps2401Dyn1PolyCl {
	constructor(coos, ms) {
	const mn = ms.length;
	let ins = [];
	
	const poly = new google.maps.Polygon({ paths: coos });
	for (const [k,v] of Object.entries(ms)) {
		let isin = google.maps.geometry.poly.containsLocation(v, poly);
		if (isin) {
			ins.push(k);
		}
	}

	kwjss.sobf('servRecv.php', { selectedMarkers : ins}, (res) => this.onret(res), false);
	
	
}

onret(res) {
	inht('result', res + ' are within the polygon');
	byid('clbtn').style.visibility = 'visible';
}

}