var map;

/*** Update Map **/
function updateMap(latitude, longitude, markerCount, addressTitle, arrayForMarkers) {
  var zoom = 9;
  if(markerCount == 1) { zoom = 15; }
  else if(markerCount == 2) { zoom = 12; }
                                
  gMap = new google.maps.Map(document.getElementById('map')); 
  gMap.setMapTypeId(google.maps.MapTypeId.SATELLITE );
  gMap.setZoom(zoom);  
  gMap.setCenter(new google.maps.LatLng(lat, lng));
                                
                                
  for(var i = 0; i < arrayForMarkers.length; i++) {
    var marker = new google.maps.Marker({
      position:  {lat: arrayForMarkers[i]['lat'], lng: arrayForMarkers[i]['lng']},
      map: gMap,
      label: arrayForMarkers[i]['markerCount'].toString(),
      animation: google.maps.Animation.DROP,
      title: arrayForMarkers[i]['address']
    });
  }  
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
	if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}


