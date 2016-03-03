function initMap() {
  document.getElementById("demo").innerHTML = "Maps World Called";
  var myLatLng = {lat: 36.677738, lng: -121.655502};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
