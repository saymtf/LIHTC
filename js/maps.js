var map;
var homeMap;

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

function findLocationByName(state, city) {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({'address':  city + ',' + state}, 
  function(results, status) {
    if(status == google.maps.GeocoderStatus.OK) {
      var lat = results[0].geometry.location.lat();
      var lng = results[0].geometry.location.lng();
      updateHomeMap(lat, lng)
    }else {
      alert("Ooops, Something went wrong..");
    }
  });
}

function updateHomeMap(lat, lng) {
  alert(lat + " " + lng);
  gMap = new google.maps.Map(document.getElementById('homeMap'));
  gMap.setMapTypeId(google.maps.MapTypeId.ROADMAP);
  gMap.setZoom(8);  
  gMap.setCenter(new google.maps.LatLng(lat, lng));
  
  var marker = new google.maps.Marker({
    position: {lat:lat, lng: lng},
    map: gMap,
    animation: google.maps.Animation.DROP,
  });
}

function toggleBounce() {
	if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
