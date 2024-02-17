var GLRESULTO;

class resultCl {
	constructor(res) {
		this.set(res);
	}
	
	set(res) {
		inht('result', this.parseRes(res));
		byid('result').style.visibility = res ? 'visible' : 'hidden';
	}
	
	parseRes(res) {
		const n = kwifs(res, 'selectedMarkersN');
		if (!n) return '';
		return n + ' markers selected';
	}
}

onDOMLoad(() => {GLRESULTO = new resultCl();});