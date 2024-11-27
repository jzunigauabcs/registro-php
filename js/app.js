function init() {
    console.log(places);
    mapboxgl.accessToken = 'pk.eyJ1Ijoianp1bmlnYXVhYmNzIiwiYSI6ImNrNW9icndveTFqcWczbXF5MzEwanphdTEifQ.UJ4D1yCUsNvFzUvB0SLn1w';
    const lat = 24.14437; 
    const lng = -110.3005;
    const zoomLevel = 9;
    let marker = null;

    const map = new mapboxgl.Map({
        container: 'map',
        center: [lng, lat],
        zoom: zoomLevel
    });
    //Se agrega un punto al dar click
    map.on('click', (e) => {
        const { lng, lat } = e.lngLat;
        if(!marker) {
            marker = new mapboxgl.Marker()
                .setLngLat([lng, lat])
                .addTo(map);
        } else {
            marker.setLngLat([lng, lat]);
        }
        document.querySelector("input[name='lat']").value = lat;
        document.querySelector("input[name='lng']").value = lng;

    });
    places.forEach((e) => {
        const m = new mapboxgl.Marker().
        setLngLat([e.lng, e.lat]).
        setPopup(new mapboxgl.Popup().setHTML(`<p>${e.mensaje}</p>`))
        .addTo(map);
    });
}

document.addEventListener('DOMContentLoaded', init);
