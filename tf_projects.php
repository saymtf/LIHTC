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
   
        <!-- Import JS, CSS -->  
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
  	    <script type="text/javascript" src="js/maps.js"></script>
      	<script type="text/javascript" src="js/modernizr.custom.js"></script>
  	    <link rel="shortcut icon" href="images/favicon.ico" /> 
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/component.css" />
        <title>LIHTC</title>
    </head>
    <body>
    	<header> <img src="images/tw.png" style="width: 20%"></img></header>
        <div class="container">
            <div id="bl-main" class="bl-main">
			
			<!-- Build Project Home -->  
			    <section>
		            <div class="bl-content">
					    
					    <!-- Address Fields -->
                        <div class="address_fields">
					        <h1>Address:</h1> 
                            
                            <input type="text" id="address-text" placeholder="123 Embarcadero st, San Francisco, CA" required />
                            <br />
                            <button onclick="" id="show">Add Address</button>
                            <button onclick="" id="hide">Remove Address</button>
                            
                            <ol>
                                <li id="input1"></li>
                                <li id="input2"></li>
                                <li id="input3"></li>
                                <li id="input4"></li>
                            </ol> 
                            <ul id="bl-work-items"><li data-panel="panel-1" id="submit"><a href="#">Submit</a></li></ul>
					    </div>
					    <!-- EOF Address Fields -->
					    
			            <!-- Display Map -->
			            <div id="map"></div>
                        <script>
                            var map;
      					    function initMap() {
        				        map = new google.maps.Map(document.getElementById('map'), {
          				        center: {lat: 37.773972, lng: -122.431297},
          				        zoom: 11
        				        });
                            }
                            
                            function updateMap(latitude, longitude, markerCount, addressTitle) {
                                var zoom = 9;
                                if(markerCount == 1) { zoom = 15; }
                                else if(markerCount == 2) { zoom = 12; }
                                
                                gMap = new google.maps.Map(document.getElementById('map')); 
                                gMap.setZoom(zoom);  
                                gMap.setCenter(new google.maps.LatLng(lat, lng));
                                
                                
                                for(var i = 0; i < arrayForMarkers.length; i++) {
                                    var marker = new google.maps.Marker({
                                        position:  {lat: arrayForMarkers[i]['lat'], lng: arrayForMarkers[i]['lng']},
                                        map: gMap,
                                        label: markerCount,
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
                        </script>
                        <!-- EOF Display Map -->    
                            
                    </div><!-- EOF bl-content -->
                    
                    <div class="page-title"> Project Homes </div> 
				    <span class="bl-icon bl-icon-close"> </span>
				</section>
			<!-- EOF Build Project Home -->
			    	
			    	
			    <div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>TESTESTETST</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
						</div>
					</div>
				<!--	<div data-panel="panel-2">
						<div>
							<img src="images/2.jpg" />
							
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/3.jpg" />
							
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/4.jpg" />
						</div>
					</div> -->
					<nav>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
            </div>
            
            
            
            
        </div><!-- EOF Container -->
        
	    <script src="js/boxlayout.js"></script>
		<script>
		    
	        /* PUT IN EXTERNAL FILE */
		    // This code adds and removes a form field
		    var count = 0;
		    
            $(document).ready(function() {	
                
                /* Set the Three Other TextFields Hidden */
                for(i = 1; i <= 4; i++) {
                    var inputs = "#input".concat(i.toString());   
                    $(inputs).hide();
                }
                $("#hide").css("display", "none");
                $("#submit").css("display", "none");
                
		        $("#show").click(function() {
		            if(count <= 4) {
		                
		                var anInput = "input";
		                var address = $('#address-text').val();
		                count++;
                        anInput = anInput.concat(count.toString());
                        document.getElementById(anInput).innerHTML = address;
                        anInput = "#".concat(anInput); 
		                $(anInput).show();
		                $("#submit").show();
		                
		            }
		            
		            // Hide/Show ElementId Button (Put as a function)
		            if(count > 0) {  $("#hide").css("display", "inline"); }
		            else { $("#hide").css("display", "none"); }
		            if(count < 4) {  $("#show").css("display", "inline"); }
		            else {   $("#show").css("display", "none"); }
		            
		        });
		
		        $("#hide").click(function() {
		            if(count >= 1) {
		               $("#show").css("display", "inline");
		               var anInput = "#input";
                        anInput = anInput.concat(count.toString());
                        $(anInput).hide();
		                count--;
		                arrayForMarkers.pop()
		                //updateMap(arrayForMarkers[count]['lat'], arrayForMarkers[count]['lat'], count, arrayForMarkers[count]['address']); // if user removed - remove marker
		            }
		            
		            // Hide/Show ElementId Button (Put as a function)
		            if(count > 0) {  $("#hide").css("display", "inline"); }
		            else { $("#hide").css("display", "none");  $("#submit").hide(); }
		            if(count < 4) {  $("#show").css("display", "inline"); }
		            else {   $("#show").css("display", "none"); }
		             
		        });
            });
            /* EOF EXTERNAL FILE */
		    
		    $(function() {
				Boxlayout.init();
			});
		</script>
  </body>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&callback=initMap"
    async defer></script>   
    
    
    <script>
        var arrayForMarkers = [];
        var markers = [];
    
        $(document).ready(function(){
        
        $('#show').click(function() {
                var address = $('#address-text').val();
                $.ajax({
                    dataType: "json",
                    url: "https://maps.googleapis.com/maps/api/geocode/json",
                    data: {address: address, key: "AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I"},
                    success: function(data, status) {
                       /* alert(data['results'][0]['geometry']['location']['lat']); //LOCATION LAT*/
                        lat = data['results'][0]['geometry']['location']['lat']; // LATITUDE
                        lng = data['results'][0]['geometry']['location']['lng']; // LONGITUDE
                        
                        markers = {lat:lat, lng:lng, address:address};
                        arrayForMarkers.push(markers);
                        
                        updateMap(lat, lng, count, address);
                    },
                    complete: function(data, status) {
                       /* alert(status); */ // DEBUG
                    }
            });
           
         }

        );
    });
    </script> 
 
</html>