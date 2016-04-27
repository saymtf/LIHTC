 var placeSearch, autocomplete;
      var map;
      var service;
     // var infowindow = new.google.maps.InfoWindow();
    //  var service = new.google.maps.places.PlacesServices(map);
      var details;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      
      var latitude = 0;
      var longitude = 0;
      var place = new Array();
    
    var Markers;
      
    //  function initAutocomplete() {
    //     // Create the autocomplete object, restricting the search to geographical
    //     // location types.
    //     autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')),{types: ['geocode']});
      
    //     // When the user selects an address from the dropdown, populate the address
    //     // fields in the form.
    //   // autocomplete.addListener('place_changed', fillInAddress);
    //   }
    
      var counter1 = 0;
      var counter2 = 0;
      
      var addressTyped;
		function initMap() {
       
       addressTyped = new google.maps.places.Autocomplete((document.getElementById('address-text')),{types: ['geocode']});
      
      }
      var panelInfo;
      function displayInfo(i)
      {
        panelInfo = i+1;
        var place = new google.maps.LatLng(latitude,longitude);
        
        map = new google.maps.Map(Markers[i]['address'], {center: place,zoom: 15});
        var request = 
        {
          location: place,
          radius: '350',
          types: ['bus_station']
        };
        var request2 = 
        {
          location: place,
          radius: '6440',
          types: ['school']
        };
        var request3 = 
        {
          location: place,
          radius: '1400',
          types: ['grocery_or_supermarket']
        };
        var request4 = 
        {
          location: place,
          radius: '16093',
          types: ['hospital']
        };
        var request5 = 
        {
          location: place,
          radius: '1600',
          types: ['health']
        };
         var request6 = 
        {
          location: place,
          radius: '1400',
          types: ['gas_station']
        };
         var request7 = 
        {
          location: place,
          radius: '1609',
          types: ['restaurant']
        };
        var request8 =
        {
          location: place,
          radius: '800',
          types: ['bank']
        };
         var request9 =
        {
          location: place,
          radius: '700',
          types: ['park']
        };
      //  var marker = new google.maps.Marker({map: map,position: details.geometry.location});
        
        service = new google.maps.places.PlacesService(map);
        
        // var cityCircle = new google.maps.Circle({strokeColor: '#FF0000',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 350});
        
        // new google.maps.Circle({strokeColor: '#FF0000',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 6440});
        
        // new google.maps.Circle({strokeColor: '#344E73',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 1400});
        
        // new google.maps.Circle({strokeColor: '#003300',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 16093});
        
        // new google.maps.Circle({strokeColor: '#cc3300',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 1600});
        
        // new google.maps.Circle({strokeColor: '#ff0066',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 1400});
        
        // new google.maps.Circle({strokeColor: '#33cccc',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 1609});
        
        // new google.maps.Circle({strokeColor: '#cc9900',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 800});
        
        // new google.maps.Circle({strokeColor: '#cc9900',strokeOpacity: 0.8,strokeWeight: 2,
        // fillColor: '#FF0000',fillOpacity: 0.05,map: map,center: place,radius: 700});
        
       
        
        
        service.nearbySearch(request, callback);
        service.nearbySearch(request2, callback);
        service.nearbySearch(request3, callback);
        service.nearbySearch(request4, callback);
        service.nearbySearch(request5, callback);
        service.nearbySearch(request6, callback);
        service.nearbySearch(request7, callback);
        service.nearbySearch(request8, callback);
        service.nearbySearch(request9, callback);
        
        
      }
      
      //'restaurant'|'hospital'|'grocery_or_supermarket'|'school'|'store'|'university'|'airport'|
     function callback(results, status)
     {
      var currentLength = place.length;
     
      if (status == google.maps.places.PlacesServiceStatus.OK)
      {
        for (var i = 0; i < results.length; i++)
        {
          place.push(results[i]);
          console.log(place[place.length - 1]);
          if(i == 0)
          {
            
            // Adds place onto panel
          var textnode = document.createTextNode(place[currentLength].name + "  " + place[currentLength].types[0] + "");
          document.getElementById("p"+panelInfo).appendChild(textnode );
          
          // Adds new line after adding a place in the panel
          var br = document.createElement("br");
          document.getElementById("p" + panelInfo).appendChild(br);
          }
        }
        place.length = results.length + place.length;
      }
     }
      

      
      function getLocation(i)
      {
        //details = addressTyped.getPlace();
        latitude = Markers[i]['lat'];
        longitude = Markers[i]['lng']; 
        displayInfo(i);
      }
      
      function test(arrayForMarkers)
      {
        Markers = arrayForMarkers;
        document.getElementById("p1").innerHTML = "";
        document.getElementById("p2").innerHTML = "";
        document.getElementById("p3").innerHTML = "";
        document.getElementById("p4").innerHTML = "";
        for(var i = 0; i < arrayForMarkers.length;i++)
        {
          getLocation(i);
          
        }
      }