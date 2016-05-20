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
       // console.log(photo.getPlace());
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
      var panel1Info;
      var numCallback = 0;
      var score = 200;
      //'restaurant'|'hospital'|'grocery_or_supermarket'|'school'|'store'|'university'|'airport'|
    function callback(results, status)
    {
       
      var currentLength = place.length;
     
      if (status == google.maps.places.PlacesServiceStatus.OK)
      {
      // clear();
        for (var i = 0; i < results.length; i++)
        {
          if(numCallback == 0)
            score += -3;
          else if(numCallback == 1)
            score += -1;
          else if(numCallback == 2)
            score += -4;
          else if(numCallback == 3)
            score += -.5;
          else if(numCallback == 4)
            score += -1;
            
          place.push(results[i]);
        // console.log(place[place.length - 1]);
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
              
              
              mapPanel1();
              // var add = document.getElementById('address-text').value();
              // console.log(add);
              // document.getElementById("address_name").appendChild(add);
              
              // Adds place onto panel
              
              var amen = document.createTextNode(str + ": " + place[currentLength].name + "\n");
              
              document.getElementById("p11").appendChild(amen);
              
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p11").appendChild(br);
              
             
              
            }
            if(panelInfo == 2)
            {
              var str = place[currentLength].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
              });
              
              //gets amenity type
              //replaces "_" with " ", capitalizes each word
              var newchar = ' ';
              str = str.split('_').join(newchar);
              str = capitalizeEachWord(str);
              
              // Adds place onto panel
              var textnode = document.createTextNode(str + ":  " + place[currentLength].name + "\n");
              document.getElementById("p2").appendChild(textnode );
              
              // Adds new line after adding a place in the panel
              var br = document.createElement("br");
              document.getElementById("p2").appendChild(br);
             
              // if(numCallback == 4)
              // {
              //   var infoPanel1 = document.createTextNode(panel1Info);
              //   document.getElementById("p1p2").appendChild(infoPanel1);
              //   console.log(infoPanel1);
              // }
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
        if(numCallback == 4)
        {
          var scoreNum = document.createTextNode(" " + score);
          document.getElementById("score").appendChild(scoreNum);
          numCallback = -1;
          var address = document.createTextNode(Markers[0].address);
              document.getElementById("addressPanel1").appendChild(address);
              // console.log(Markers[0].address);
          panel1Info = document.getElementById("p11").innerHTML;
        }
        
        numCallback++;
        place.length = results.length + place.length;
      }
       
    }
      
      function mapPanel1() {
        var fenway = {lat: latitude, lng: longitude};
        
    var mapDiv = document.getElementById('mapPanel1');
    var map =new google.maps.Map(mapDiv, {
      center: fenway,
      zoom: 95,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    });
    var panorama = new google.maps.StreetViewPanorama(
      document.getElementById('mapPanel1'), {
        position: fenway,
        pov: {
          heading: 300,
          pitch: 0
        }
      });
      map.setStreetView(panorama);
  }
  function mapPanel2()
  {
     var mapDiv = document.getElementById('mapPanel1');
    var map =new google.maps.Map(mapDiv, {
      center: {lat: 44.540, lng: -78.546},
      zoom: 95,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    });
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
        console.log(arrayForMarkers.length);
        for(var i = 0; i < arrayForMarkers.length;i++)
        {
          
          setTimeout(getLocation(i),5000);
          
        }
      }
      function clear()
      {
         document.getElementById("p1").innerHTML = "";
        document.getElementById("p2").innerHTML = "";
        document.getElementById("p3").innerHTML = "";
        document.getElementById("p4").innerHTML = "";
      }
      
      function individualSearch(markers,address)
      {
        latitude = markers['lat'];
        longitude = markers['lng']; 
        var both = new google.maps.LatLng(latitude, longitude);

        getInfo(address);
      }
      
      function getInfo(address)
      {
        console.log("HERE")
       // panelInfo = i+1;
        var place = new google.maps.LatLng(latitude,longitude);
        map = new google.maps.Map(address, {center: place,zoom: 15});
        
        var photo = new google.maps.places.Autocomplete((address),{types: ['geocode']});
       // console.log(photo.getPlace());
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



        //service.nearbySearch(bus_station, callback);
        service.nearbySearch(school, callback);
        service.nearbySearch(grocery_or_supermarket, callback);
        service.nearbySearch(hospital, callback);
        //service.nearbySearch(health, callback);
        //service.nearbySearch(gas_station, callback);
        service.nearbySearch(restaurant, callback);
        service.nearbySearch(bank, callback);
        //service.nearbySearch(park, callback);
      
        // setTimeout(service.nearbySearch(school, callback),1000);
        // setTimeout(service.nearbySearch(grocery_or_supermarket, callback),1000);
        // setTimeout(service.nearbySearch(hospital, callback),1000);
        // setTimeout(service.nearbySearch(restaurant, callback),1000);
        // setTimeout(service.nearbySearch(bank, callback),1000);
        
        
      }
      var numPanel = 0;
      var arrayToSave = 0;
      var school1 = [];
      var grocery1 = [];
      var hospital1 = [];
      var restaurant1 = [];
      var bank1 = [];
      
      var school2 = [];
      var grocery2 = [];
      var hospital2 = [];
      var restaurant2 = [];
      var bank2 = [];
    //   function callback(results, status)
    // {
       

    //   if (status == google.maps.places.PlacesServiceStatus.OK)
    //   {
    //     for (var i = 0; i < 5; i++)
    //     {
    //       console.log(arrayToSave);
    //       if(numPanel == 0)
    //       {
    //         if(arrayToSave == 0)
    //         {
    //           console.log("1");
    //           console.log(results[i]);
    //           school1.push(results[i]);
    //         }
    //         else if(arrayToSave == 1)
    //         {
    //           console.log("2");
    //           console.log(results[i]);
    //           grocery1.push(results[i]);
    //         }
    //         else if(arrayToSave == 2)
    //         {
    //           console.log("3");
    //           console.log(results[i]);
    //           hospital1.push(results[i]);
    //         }
    //         else if(arrayToSave == 3)
    //         {
    //           console.log("4");
    //           console.log(results[i]);
    //           restaurant1.push(results[i]);
    //         }
    //         else if(arrayToSave == 4)
    //         {
    //           console.log("5");
    //           console.log(results[i]);
    //           bank1.push(results[i]);
    //         }
    //       }
    //       else if(numPanel == 1)
    //       {
    //         if(arrayToSave == 0)
    //         {
    //           console.log("add");
    //           school2.push(results[i]);
    //         }
    //         else if(arrayToSave == 1)
    //         {
    //           console.log("add");
    //           grocery2.push(results[i]);
    //         }
    //         else if(arrayToSave == 2)
    //         {
    //           console.log("add");
    //           hospital2.push(results[i]);
    //         }
    //         else if(arrayToSave == 3)
    //         {
    //           restaurant2.push(results[i]);
    //         }
    //         else if(arrayToSave == 4)
    //         {
    //           bank2.push(results[i]);
    //         }
    //       }
    //       if(arrayToSave == 4 && 4 == i)
    //       {
    //         populatePanel();
    //       }
    //     }
        
        
    //   }
    //   arrayToSave++;
    // }
     
     function populatePanel()
     {
       if (numPanel == 0)
       {
         var schoolStr = school1[0].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                 return letter.toUpperCase();
               });
        var groceryStr = grocery1[0].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                 return letter.toUpperCase();
               });
               
        var hospitalStr = hospital1[0].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                 return letter.toUpperCase();
               });
        var restStr = restaurant1[0].types[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
                 return letter.toUpperCase();
               });
              
    //           //gets amenity type
    //           //replaces "_" with " ", capitalizes each word
               var newchar = ' ';
              // str = str.split('_').join(newchar);
              // str = capitalizeEachWord(str);
              
    //           // Adds place onto panel
    //           var textnode = document.createTextNode(str + "  " + place[currentLength].name + "\n");
    //           document.getElementById("p2").appendChild(textnode );
              
    //           // Adds new line after adding a place in the panel
    //           var br = document.createElement("br");
    //           document.getElementById("p2").appendChild(br);
         console.log("populate");
         var amen = document.createTextNode("School " + school1[0].name + "\n");
         document.getElementById("p11").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p11").appendChild(br);
         
         amen = document.createTextNode("grocery " + grocery1[0].name + "\n");
          document.getElementById("p11").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p11").appendChild(br);
         
         amen = document.createTextNode("hospital " + hospital1[0].name + "\n");
          document.getElementById("p11").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p11").appendChild(br);
         
         amen = document.createTextNode("Restaurant " + restaurant1[0].name + "\n");
          document.getElementById("p11").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p11").appendChild(br);
         console.log("NUMPANEL " + numPanel);
         numPanel++;
         console.log("NUMPANEL " + numPanel);
         arrayToSave=0;
         console.log("ARRAY TO SAVE  " + arrayToSave);
       }
       
       else if (numPanel == 1)
       {
         
         var infoPanel1 = document.createTextNode(document.getElementById("p11").innerHTML);
         document.getElementById("p1p2").appendChild(infoPanel1);
    
        console.log(school2[0]);
         var amen = document.createTextNode("School " + school2[0].name + "\n");
         document.getElementById("p2").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p2").appendChild(br);
         
         amen = document.createTextNode("grocery " + grocery2[0].name + "\n");
          document.getElementById("p2").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p2").appendChild(br);
         
         amen = document.createTextNode("grocery " + hospital2[0].name + "\n");
          document.getElementById("p2").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p2").appendChild(br);
         
         amen = document.createTextNode("grocery " + restaurant2[0].name + "\n");
          document.getElementById("p2").appendChild(amen);
         //Adds new line after adding a place in the panel
         var br = document.createElement("br");
         document.getElementById("p2").appendChild(br);
       }
     }
     
     
     function secMap(markers)
     {
       
        var fenway = {lat: latitude, lng: longitude};
        
    var mapDiv = document.getElementById('mapPanel12');
    var map =new google.maps.Map(mapDiv, {
      center: fenway,
      zoom: 95,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    });
    var panorama = new google.maps.StreetViewPanorama(
      document.getElementById('mapPanel12'), {
        position: fenway,
        pov: {
          heading: 300,
          pitch: 0
        }
      });
      map.setStreetView(panorama);
      
      // var mapDiv2 = document.getElementById('mapPanel2');
      // var map2 =new google.maps.Map(mapDiv2, {
      // center: {lat: 44.540, lng: -78.546},
      // zoom: 95,
      // mapTypeId: google.maps.MapTypeId.SATELLITE
      // });
     }