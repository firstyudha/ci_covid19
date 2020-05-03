async function getCovidData(url) {
	const res = await fetch(url)
	const data = await res.json()
	for (const item of data) {
		const {
			attributes
		} = item
		let color = ''

		if (attributes.Confirmed <= 2000) {
			color = 'green'
		} else if (attributes.Confirmed <= 5000) {
			color = 'yellow'
		} else if (attributes.Confirmed > 5000) {
			color = 'red'
		} else {
			color = 'green'
		}

		var popup = new mapboxgl.Popup({
			offset: 25
		}).setText(
			`Country : ${attributes.Country_Region} || Infected : ${attributes.Confirmed} || Recovered : ${attributes.Recovered}`
		);

		var marker = new mapboxgl.Marker({
				color: color
			})
			.setLngLat([attributes.Long_, attributes.Lat])
			.setPopup(popup)
			.addTo(map);

	}
}

getCovidData('https://api.kawalcorona.com/')


mapboxgl.accessToken = 'pk.eyJ1IjoicmF5aGFuYXppejc3IiwiYSI6ImNrOXF1d3NsNjBtOHAzc3J0ZG53YzRuOW0ifQ.23E5E6AJ8azTrdW4nbfcEQ';
var map = new mapboxgl.Map({
	container: 'map',
	zoom: 2.3,
	center: [113.9213, -0.7893],
	style: 'mapbox://styles/rayhanaziz77/ck9qv6o7r0mwp1imz0c5pg3sf'
});
