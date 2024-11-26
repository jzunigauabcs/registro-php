function init() {
    mapboxgl.accessToken = 'pk.eyJ1Ijoianp1bmlnYXVhYmNzIiwiYSI6ImNrNW9icndveTFqcWczbXF5MzEwanphdTEifQ.UJ4D1yCUsNvFzUvB0SLn1w';

    const lat = 24.14437; 
    const lng = -110.3005;
    const zoomLevel = 9;
    const map = new mapboxgl.Map({
        container: 'map',
        center: [lng, lat],
        zoom: zoomLevel
    });
}

document.addEventListener('DOMContentLoaded', init);
