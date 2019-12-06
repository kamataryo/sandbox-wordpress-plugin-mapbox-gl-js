document.addEventListener("DOMContentLoaded", () => {
	new mapboxgl.Map({
		container: document.getElementById("map"),
		style:
			"https://raw.githubusercontent.com/geolonia/styles.geolonia.com/master/geolonia-basic-3d/style.json"
	});
});
