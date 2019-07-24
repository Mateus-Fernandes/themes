var map;
function initMap() {
    var myLatLng = {lat: -26.297800, lng: -48.864680};
    var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 15,
    disableDefaultUI: true
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'FESC - Empresa do Sistema Unimed SC'
  });
}