<!-- 
GIT REPO:

https://github.com/saymtf/LIHTC.git 
#1589FF BLUE
#5EFB6E GREEN
-->
  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="initial-scale=1.0">
    <!-- Import Jq, Google API, Font-Awesome -->  
	  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  
	  <title>LIHTC</title>
	  
	  <script>
      function initMap() {
        document.getElementById("demo").innerHTML = "Maps World";
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
	  
	  <style> 
	    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
      #map { 
        height: 100%; 
      } 
    </style>
	  
  </head>
  <body>
  
  
   <!-- <div id="wrapper"> -->
	    <a href="/map.html">asdf</a>
      <p id="demo"></p>
     
      <div id="sp"></div>
     
       <!-- Display First -->
      <div id="images">
        <div id="find_home"><i class="fa fa-home fa-5x"></i></div>  
        <div id="find_project"><i class="fa fa-building-o fa-5x"></i></div>  
      </div>
            
      <!-- Display Text Fields -->
      <div id="text_fields"></div>        
      
      <!-- Display Map -->
      <div id="map"></div>
    
            
    <!-- </div><!-- EOF Wrapper -->
  </body>

  <script> document.getElementById("demo").innerHTML = "Hello World!"; </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&callback=initMap"
    async defer></script>   
  
 
</html>