//inisialisasi mapnya
var map = L.map("map").setView([-6.914744, 107.60981], 12);
L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png").addTo(map);

//        untuk url ini diganti sesuai hostingan /assets/json/map.json (http://localhost/ci_covid19/assets/json/map.json) 
axios.get("https://covid19-public.digitalservice.id/api/v1/sebaran/jabar").then((res) => {
	const main = res.data;
	const {
		content
	} = main.data;
	var myRenderer = L.canvas({
		padding: 1,
	});
	content.forEach((element) => {
		const {
			latitude,
			longitude,
			status,
			umur
		} = element;
		let color = "";
		switch (status) {
			case "ODP":
				color = "yellow";
				break;
			case "PDP":
				color = "orange";
				break;
			case "OTG":
				color = "red";
				break;
			case "Positif":
				color = "brown";
				break;
		}
		L.circleMarker([latitude, longitude], {
				renderer: myRenderer,
				radius: 8,
				fillColor: color,
				color: "black",
				weight: 1,
				opacity: 1,
				fillOpacity: 0.8,
			})
			.bindPopup(status)
			.addTo(map);
	});
});
