function initMap(param) {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: {lat: -28.024, lng: 140.887}
    });


    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    var arrayMarker = [];

    for (let i = 0; i < param.length; i++) {
        var marker = new google.maps.Marker({
            position: {lat: parseFloat(param[i].lat), lng: parseFloat(param[i].lng)},
            label: param[i].name,
            map: map,
        });
        arrayMarker.push(marker);
    }

    var options = {
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    };

    var markerCluster = new MarkerClusterer(map, arrayMarker, options);
}

