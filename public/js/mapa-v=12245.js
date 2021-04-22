// Mapa
var map;
function initMap() {
    var uluru = {lat: lat, lng: lng};
    map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 17,
        center: uluru,
    });

    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        icon: '/images/pin.png',
    });
}