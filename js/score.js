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
      
      var Elements;
		function initMap() {
      addressTyped = new google.maps.places.Autocomplete((document.getElementById('address-text')),{types: ['geocode']});
      var homeMap = new google.maps.Map(document.getElementById('homeMap'), { center: {lat: -34.397, lng: 150.644}, zoom: 8});

      
		  
		}
      var panelInfo;
      function displayInfo(i)
      {
        console.log("HERE")
        panelInfo = i+1;
        var place = new google.maps.LatLng(latitude,longitude);
        map = new google.maps.Map(Elements[i], {center: place,zoom: 15});
        
        var photo = new google.maps.places.Autocomplete((Elements[i]),{types: ['geocode']});
        console.log(photo.getPlace());
        var bus_station = 
        {
          location: place,
          radius: '350',
          types: ['bus_station']
        };
        var school = 
        {
          location: place,
          radius: '6440',
          types: ['school']
        };
        var grocery_or_supermarket = 
        {
          location: place,
          radius: '1400',
          types: ['grocery_or_supermarket']
        };
        var hospital = 
        {
          location: place,
          radius: '16093',
          types: ['hospital']
        };
        var health = 
        {
          location: place,
          radius: '1600',
          types: ['health']
        };
         var gas_station = 
        {
          location: place,
          radius: '1400',
          types: ['gas_station']
        };
         var restaurant = 
        {
          location: place,
          radius: '1609',
          types: ['restaurant']
        };
        var bank =
        {
          location: place,
          radius: '800',
          types: ['bank']
        };
         var park =
        {
          location: place,
          radius: '700',
          types: ['park']
        };
      //  var marker = new google.maps.Marker({map: map,position: details.geometry.location});
        
        service = new google.maps.places.PlacesService(map);


// var request = {
//     location: map.getCenter()
  
// }

//       service.textSearch(request, function(results, status){
//         console.log(results);
//       });
      
      
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
        
       
        
        
        //service.nearbySearch(bus_station, callback);
        service.nearbySearch(school, callback);
        service.nearbySearch(grocery_or_supermarket, callback);
        service.nearbySearch(hospital, callback);
        //service.nearbySearch(health, callback);
        //service.nearbySearch(gas_station, callback);
        service.nearbySearch(restaurant, callback);
        service.nearbySearch(bank, callback);
        //service.nearbySearch(park, callback);
        
        
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
            
            if(panelInfo == 1)
            {
              var str = place[currentLength].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                 return letter.toUpperCase();
              });
              
              //gets amenity type
              //replaces "_" with " ", capitalizes each word
              var newchar = ' ';
              str = str.split('_').join(newchar);
              str = capitalizeEachWord(str);
              
              
              
              // var add = document.getElementById('address-text').value();
              // console.log(add);
              // document.getElementById("address_name").appendChild(add);
              
              // Adds place onto panel
              //var amen_type = document.createTextNode(str + ": ");
              var amen = document.createTextNode(str + ": " + place[currentLength].name + "\n");
              
              document.getElementById("p11").style.fontWeight = "900";
              //document.getElementById("p1").style.fontsize(4);
              //document.getElementById("p1").appendChild(amen_type);
              document.getElementById("p11").appendChild(amen);
              
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p11").appendChild(br);
            }
            else if(panelInfo == 2)
            {
              
               // Adds place onto panel
              var textnode = document.createTextNode(place[currentLength].name + "  " + place[currentLength].types[0] + "");
              document.getElementById("p2").appendChild(textnode );
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p2").appendChild(br);
            }
            else if(panelInfo == 3)
            {
              
               // Adds place onto panel
              var textnode = document.createTextNode(place[currentLength].name + "  " + place[currentLength].types[0] + "");
              document.getElementById("p3").appendChild(textnode );
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p3").appendChild(br);
            }
            else if(panelInfo == 4)
            {
              
               // Adds place onto panel
              var textnode = document.createTextNode(place[currentLength].name + "  " + place[currentLength].types[0] + "");
              document.getElementById("p4").appendChild(textnode );
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p4").appendChild(br);
            }
          }
        }
        place.length = results.length + place.length;
      }
     }
      
      function capitalizeEachWord(str)
      {
         var words = str.split(" ");
         var arr = [];
         for (var i in words)
        {
          var temp = words[i].toLowerCase();
          temp = temp.charAt(0).toUpperCase() + temp.substring(1);
          arr.push(temp);
        }
       return arr.join(" ");
      }
      
      function getLocation(i)
      {
        //details = addressTyped.getPlace();
        latitude = Markers[i]['lat'];
        longitude = Markers[i]['lng']; 
        var both = new google.maps.LatLng(latitude, longitude);

        displayInfo(i);
       // return both;
      }
      
      
    /*  $confirm.click(function(){
    var _street = $('#address').val();
    var place = autocomplete.getPlace();
     //a google.maps.LatLng object
    var _kCord = new google.maps.LatLng(-36.874694, 174.735292);
    var _pCord = new google.maps.LatLng(-36.858317, 174.782284);

    console.log(_coordinates);

    console.log(google.maps.geometry.spherical.computeDistanceBetween(_pCord, _coordinates));
    console.log(google.maps.geometry.spherical.computeDistanceBetween(_kCord, _coordinates));
});*/
      
      
      function test(arrayForMarkers,elements)
      {
        Markers = arrayForMarkers;
        Elements = elements;
        document.getElementById("p1").innerHTML = "";
        document.getElementById("p2").innerHTML = "";
        document.getElementById("p3").innerHTML = "";
        document.getElementById("p4").innerHTML = "";
        for(var i = 0; i < arrayForMarkers.length;i++)
        {
          getLocation(i);
          
        }
      }