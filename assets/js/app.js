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

function toggleSidebar(id) {
	var elem = document.getElementById(id);
	var classes = elem.className.split(' ');
	var collapsed = classes.indexOf('collapsed') !== -1;

	var padding = {};

	if (collapsed) {
		// Remove the 'collapsed' class from the class list of the element, this sets it back to the expanded state.
		classes.splice(classes.indexOf('collapsed'), 1);

		padding[id] = 300; // In px, matches the width of the sidebars set in .sidebar CSS class
		map.easeTo({
			padding: padding,
			duration: 1000 // In ms, CSS transition duration property for the sidebar matches this value
		});
	} else {
		padding[id] = 0;
		// Add the 'collapsed' class to the class list of the element
		classes.push('collapsed');

		map.easeTo({
			padding: padding,
			duration: 1000
		});
	}

	// Update the class list on the element
	elem.className = classes.join(' ');
}

map.on('load', function () {
	toggleSidebar('left');
});
