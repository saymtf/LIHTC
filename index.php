<!-- 
GIT REPO:

https://github.com/saymtf/LIHTC.git 
#1589FF BLUE
#5EFB6E GREEN
-->
  
<!DOCTYPE html>
<html>

  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<title>CST-499</title>
</head>
  
<script>
    function initMap() {
    		<!-- Change Location -->
  			var myLatLng = {lat: -25.363, lng: 131.044};
	
  			var map = new google.maps.Map(document.getElementById('google_maps'), {
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
  
<body>
	<div id="wrapper">
     <div id="sp"></div>
     <!-- Display First -->
     <div id="images">
       
     		<div id="home">
      		<i class="fa fa-home fa-5x"></i>
     		</div>  
      
      	<div id="building">
      		<i class="fa fa-building-o fa-5x"></i>
     		</div>  
            
      </div>
            
      <!-- Text Fields -->
      <div id="text_fields">
		</div>        
      
      <!-- Display Map -->
      <div id="google_maps">
      </div>
            
  </div>
</body>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&signed_in=true&callback=initMap"></script>
</html>