// axios.get("https://covid19-public.digitalservice.id/api/v1/sebaran/jabar")
// 	.then(res => {
// 		const main = res.data
// 		const {
// 			content
// 		} = main.data

// 		for (const item of content) {
// 			const {
// 				latitude,
// 				longitude,
// 				status,
// 				umur
// 			} = item

// 			var geojsonFeature = {
// 				"type": "Feature",
// 				"properties": {
// 					"name": "Coors Field",
// 					"amenity": "Baseball Stadium",
// 					"popupContent": "This is where the Rockies play!"
// 				},
// 				"geometry": {
// 					"type": "Point",
// 					"coordinates": [-6.914744, 107.609810]
// 				}
// 			}
// 			L.geoJSON(geojsonFeature).addTo(map);
// 		}
// 	});

//inisialisasi mapnya
var map = L.map('map').setView([-6.914744, 107.609810], 7);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox/streets-v11',
	tileSize: 512,
	zoomOffset: -1,
	accessToken: 'pk.eyJ1IjoicmF5aGFuYXppejc3IiwiYSI6ImNrOXF1d3NsNjBtOHAzc3J0ZG53YzRuOW0ifQ.23E5E6AJ8azTrdW4nbfcEQ'
}).addTo(map);
