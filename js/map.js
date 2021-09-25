function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
       center: { lat:  44.271128, lng: 19.899574 },
       zoom: 17,
       disableDefaultUI: true,
       styles: [
             {
                "elementType": "geometry",
                "stylers": [{"color": "#212121"}]
             },
             {
                "elementType": "labels.icon",
                "stylers": [{"visibility": "on"}]
             },
             {
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#757575"}]
             },
             {
                "elementType": "labels.text.stroke",
                "stylers": [{"color": "#212121"}]
             },
             {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{"color": "#757575"}]
             },
             {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#9e9e9e"}]
             },
             {
                "featureType": "administrative.land_parcel",
                "stylers": [{"visibility": "off"}]
             },
             {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#bdbdbd"}]
             },
             {
                "featureType": "administrative.neighborhood",
                "stylers": [{"visibility": "on"}]
             },
             {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#757575"}]
             },
             {
                "featureType": "poi.business",
                "stylers": [{"visibility": "on"}]
             },
             {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{"color": "#181818"}]
             },
             {
                "featureType": "poi.park",
                "elementType": "labels.text",
                "stylers": [{"visibility": "off"}]
             },
             {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#616161"}]
             },
             {
                "featureType": "poi.park",
                "elementType": "labels.text.stroke",
                "stylers": [{"color": "#1b1b1b"}]
             },
             {
                "featureType": "road",
                "stylers": [{"visibility": "on"}]
             },
             {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#2c2c2c"}]
             },
             {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{"visibility": "on"}]
             },
             {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#8a8a8a"}]
             },
             {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{"color": "#373737"}]
             },
             {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#757575"}]
             },
             {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#000000"}]
             },
             {
                "featureType": "water",
                "elementType": "labels.text",
                "stylers": [{"visibility": "on"}]
             },
             {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#3d3d3d"}]
             }
          ]
    });
 
    const marker = new google.maps.Marker({
       position: {lat: 44.271128, lng: 19.899574},
       map: map
    });
 
    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div style='width: 6rem; text-align: left'>
                <h4 style='margin-bottom: 5px'>FC Mr Big</h4>
                <p>Kolubara 2</p>
                <p>Valjevo</p>
                <p>Serbia</p>
            </div>
        `
    })
    marker.addListener('click', function(){
       infoWindow.open(map, marker)
    });
}

window.initMap = initMap;