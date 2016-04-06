<!-- 
GIT REPO:

https://github.com/saymtf/LIHTC.git 
#1589FF BLUE
#5EFB6E GREEN
-->
  
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <!-- metas -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Low Income Housing" />
	<meta name="keywords" content="lihtc, project, homes" />
	<meta name="author" content="saymtf" />
	 <!-- Import JS, CSS -->  
	<script src="https://maps.googleapis.com/maps/api/js"></script>
  	<script type="text/javascript" src="js/maps.js"></script>
  	<script type="text/javascript" src="js/modernizr.custom.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<link rel="shortcut icon" href="images/favicon.ico" /> 
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<!-- <link rel="stylesheet" href="css/mainsheet.css" /> -->
	
	<title>LIHTC</title>
	
  </head>
  <body>
  	
  	<!-- ADD WHEN USER CLICKS HEADER BANNER IT TAKES THEM BACK TO MAIN PAGE -->
  	<header><img id="header" src="images/tw-logo.png"></img></header>
  		<div class="container">	
		<!--	<div class="empty-block"><span id="info-text">Welcome to Thoughtworks!<br /> &nbsp; Choose an options below to get started.</span></div> -->
			<div id="bl-main" class="bl-main">
				<!-- Build Project Home -->  
			    <section>
			    	<div class="bl-box"> 
						<h2><span class="fa fa-building-o fa-lg"></span><br/>Click To Build A Project Home</h2>
					</div>
		            <div class="bl-content">
		            	<!-- Address Fields -->
                        <div class="address_fields">
					        <h1 class="content-title">Find Your Project Home(s) Below</h1>
					        
					        	<h5 id="project-instruction">Click For Instructions</h5>
					        	<div id="instructions">
					        		<p>&nbsp;&nbsp;&nbsp;&nbsp; Type your address below then click 'Add Address' (After Adding an address, 'Remove Address' will appear. It will remove the latest address inserted).</p>
					        		<p>&nbsp;&nbsp;&nbsp;&nbsp; You are allowed to have up to 4 addresses. After adding a new Address, a marker will appear to show you the location of where that home is!</p>
                            	</div>
                            <input type="text" id="address-text" placeholder="123 Embarcadero st, San Francisco, CA" required />
                            <br />
                            <button onclick="" id="show"><span>Add Address</span></button>
                            <button onclick="" id="hide"><span>Remove Address</span></button>
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
                    </div><!-- EOF bl-content -->
				    <span class="bl-icon bl-icon-close"> </span>
				</section>
			<!-- EOF Build Project Home -->
				
			<!-- Homes Project -->	
				<section>
					<div class="bl-box"> 
						<h2><span class="fa fa-home fa-lg"></span><br/>Click To Find A New Home</h2>
					</div>
					<div class="bl-content">
						<h1 class="content-title">Fill In The Form To Find A Perfect Affordable Home</h1> 
						State <input type="text" id="address-text" placeholder="CA" required />
						City <input type="text" id="address-text" placeholder="San Francisco" required />
						Annual Income <input type="text" id="address-text" placeholder="23000" required />
						<input type="submit" />
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
			<!-- EOF Homes Project -->	
			
			<!-- About Us -->	
				<section>
					<div class="bl-box"> 
						<h4>About Us</h4>
					</div>
					<div class="bl-content">
						<h3><a href="compare_one.php">Compare</a></h3>
						<h3><a href="compare_two.php">Compare TWO</a></h3>
						<h3><a href="compare_four.php">Compare Four</a></h3>
						
						
						<p>Thoughtworks is a ... </p>
						
						<p><a href="https://www.thoughtworks.com/about-us" target="_blank">Click here to learn more about Thoughtworks</a></p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
			<!-- EOF About Us -->	
				
			<!-- Panel items for project homes -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>TESTESTETST</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/1.jpg" />
							<h3>TESTESTETST</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/1.jpg" />
							<h3>TESTESTETST</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/1.jpg" />
							<h3>TESTESTETST</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
						</div>
					</div>
					<nav>
					<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			<!-- EOF Panel items for project homes -->	
				
			</div>
		</div><!-- /container -->
	
	
   		<script src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
			
			
			$('#project-instruction').on('click', function () {
    			$('#instructions').toggle('slide');
			});
			
/* PUT IN EXTERNAL FILE */
		    /*** This code adds and removes a form field ***/
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
    	
		
		</script>
	
	</body>
	
	<!-- FIND WHERE TO MOVE THIS -->
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
                        
                        markers = {lat:lat, lng:lng, address:address, markerCount:count};
                        arrayForMarkers.push(markers);
                        
                        updateMap(lat, lng, count, address, arrayForMarkers);
                    },
                    complete: function(data, status) {
                       /* alert(status); */ // DEBUG
                    }
            	});
           });
           
           
    	});
    </script> 
  
</html>