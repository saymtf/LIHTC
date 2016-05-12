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
  	<script type="text/javascript" src="js/maps.js"></script>
  	<script type="text/javascript" src="js/score.js"></script>
  	<script type="text/javascript" src="js/modernizr.custom.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<link rel="shortcut icon" href="images/favicon.ico" /> 
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	
	<script type="text/javascript" src="js/houseClass.js"></script>
	<title>LIHTC</title>
	
  </head>
  <body>
  	
  	<!-- ADD WHEN USER CLICKS HEADER BANNER IT TAKES THEM BACK TO MAIN PAGE -->
  	<header><img id="header" src="images/lihtc_header.png"></img></header>
  		<div class="container">	
			<div id="bl-main" class="bl-main">
				<!-- Build Project Home -->  
			    <section>
			    	<div class="bl-box"> 
						<h2><span class="fa fa-building-o fa-lg"></span><br/><br/>Click To Build A Project Home</h2>
					</div>
		            <div class="bl-content">
		            	<!-- Address Fields -->
                        <div class="address_fields">
					        <h1 class="content-title">Enter Your Project Location(s) Below</h1>
					        	<h5 id="project-instruction"><!--<span class="fa fa-info-circle fa-3x" id="info_field"></span>--> Click For Instructions</h5>
					        	<div id="instructions">
					        		<p>Type your address below then click '<i>Add Address</i>'. <br /> '<i>Remove Address</i>' the latest address inserted.</p>
					        		<p>After adding all the addresses you're interested in, press '<i>submit</i>'.</p>
					        		<p>A Map will show locations of the addresses.<br /> <strong style="font-weight:bold;">You are allowed to compare up to 4 addresses.</strong></p>
                            	</div>
                            	<hr />
                            	<div id="address">
                            		<input type="text" id="address-text" placeholder="123 Embarcadero st, San Francisco, CA" required />
                            		<br />
                            		<button id="show"><span>Add Address</span></button>
                            		<button id="hide"><span>Remove Address</span></button>
                         			<ol>
                                		<li id="input1"></li>
                                		<li id="input2"></li>
                                		<li id="input3"></li>
                                		<li id="input4"></li>
                            		</ol> 
                            		<ul id="bl-work-items"><li data-panel="panel-1" id="submit-projects"><a href="#">Submit</a></li></ul>
					    		</div>
					    </div>
					    <hr />
					    <!-- Display Map -->
			            <div id="map"></div> 
					    <!-- EOF Address Fields -->
					</div><!-- EOF bl-content -->
				    <span class="bl-icon bl-icon-close bl-content-icon-close"> </span>
				</section>
			<!-- EOF Build Project Home -->
				
			<!-- Homes Project -->	
				<section>
					<div class="bl-box"> 
						<h2><span class="fa fa-home fa-lg"></span><br/><br/>Click To Find A New Home</h2>
					</div>
					<div class="bl-content">
						<h1 class="content-title">Fill In The Form To Find A Perfect Affordable Home</h1>
						<hr />
						<div id="home_fields">
							<div id="home-input-fields-div">
								<ul id="home-input-fields">
									<li>
										<label>State</label><br />
										<input type="text" id="state-field" placeholder="CA" required />
									</li>
									<br />
									<li>
										<label>City</label><br />
										<input type="text" id="city-field" placeholder="San Francisco" required />
									</li>
									<br />
									<li>
										<label>Income</label><br />
										<input type="text" id="annual-field" placeholder="23000" required />
									</li>
									<br />
								</ul>
							</div>
							<ul id="bl-work-items"><li data-panel="panel-5" id="submit-homes"><a id="submit-to-panel" href="#">Submit</a></li></ul>
						</div>
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
						<h1 class="content-title">About This Project</h1>
						<hr />
						<div id="about-us-content">
							
							<p>
							This Low Income Housing project was created by four CSUMB students: Alonso, Jose, Miranda, and Thane. 
							</p>
							
							<p>
							The LIHTC project was proposed by Eliza, whom is a employee at Thoughtworks wanting to provide contractors
							to find a perfect location regarding a score depending on surrounding enviorments in the area. 
							</p>
						</div>
						
						<hr />
						<div id="about-us-content">	<p><a id="about-thoughtworks" href="https://www.thoughtworks.com/about-us" target="_blank">Learn more about Thoughtworks</a></p> </div>
						<h1 style="color:000;"><b>TESTING PAGES</b></h1>
						<h3><a href="compare_one.php">Compare</a></h3>
						<h3><a href="compare_two.php">Compare TWO</a></h3>
						<h3><a href="compare_four.php">Compare Four</a></h3>
						
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
			<!-- EOF About Us -->	
				
			<!-- Panel items for project homes -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<h3>Panel 1</h3>
							<p id="address-name"></p>
							
							<div id="testing">
								<span id="p11" style="font-size: 200%"></span><span id="p1"></span>
								
							</div>
    					</div>
    				</div>	
					<div data-panel="panel-2">
						<div>
							<h3>Panel 2</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<div id="testing">
								<p id="p2"></p>
								
							</div>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<h3>Panel 3</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<div id="testing">
								<p id="p3"></p>
								
							</div>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<h3>PANEL 4</h3>
							<p>Iphone budslskame bushwick bespokefd THIS TEST NEEd to GET THE PARAMETERS THAT PASS OVER.</p>
							<div id="testing">
								<p id="p4"></p>
								
							</div>
						</div>
					</div>
					<div data-panel="panel-5">
						<div>
							<h3>PANEL 5 -- FINDING A HOME</h3>
							<div id="homeMap"></div>
						</div>
					</div>
					<nav>
					<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			<!-- EOF Panel items for project homes -->	
				
			</div>
		</div><!-- container -->
	
	
   	<script src="js/boxlayout.js"></script>
   	<!-- Finding the Address & Adding new marker --> 
   	
   	<script>
   		
    	$("#submit-projects").click(function() {
    		var $panelName = "panel-".concat(count);
			$("li").data("panel", $panelName);
			test(window.arrayForMarkers, window.elements);
		});
    </script>
    
    <script>
    	$(".bl-content-icon-close").click(function() {
    		arrayForMarkers = [];
    		markers = [];
    		elements = [];
    		count = 0;
    	//	$("ol").empty();
    		$("#address-text").empty();
    		$("#map").css("display", "none");
            $("#hide").css("display", "none");
            $("#submit-projects").css("display", "none");
    	});
    </script>
    
    
  	<script>
        var arrayForMarkers = [];
        var markers = [];
    
    	var elements = [];
        $(document).ready(function(){
        	$('#show').click(function() {
                var address = $('#address-text').val();
                if(address != "") {
        	        $.ajax({
    	                dataType: "json",
	                    url: "https://maps.googleapis.com/maps/api/geocode/json",
                	    data: {address: address, key: "AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I"},
            	        success: function(data, status) {
        	               /* alert(data['results'][0]['geometry']['location']['lat']); //LOCATION LAT*/
    	                    lat = data['results'][0]['geometry']['location']['lat']; // LATITUDE
	                        lng = data['results'][0]['geometry']['location']['lng']; // LONGITUDE
                        
                        	elements.push(document.getElementById('address-text'));
                        	
                    	    markers = {lat:lat, lng:lng, address:address, markerCount:count};
                    	    arrayForMarkers.push(markers);
                	        
            	            updateMap(lat, lng, count, address, arrayForMarkers);
            	            
        	            },
    	                complete: function(data, status) {
	                       /* alert(status); */ // DEBUG
                    	}
            		});
                }
           });
           
           
    	});
    	</script>
    	
    	 
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
                $("#map").css("display", "none");
                $("#hide").css("display", "none");
                $("#submit-projects").css("display", "none");
                
                
		        $("#show").click(function() {
		        	if($('#address-text').val() != "") { 
		            	if(count <= 4) {
		                
		                	var anInput = "input";
		                	var address = $('#address-text').val();
		                	count++;
                        	anInput = anInput.concat(count.toString());
                        	document.getElementById(anInput).innerHTML = address;
                        	anInput = "#".concat(anInput); 
		                	$(anInput).show();
		                	$("#submit-projects").show();
		                	$("#map").show();
		                
		            	}
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
		            else { $("#hide").css("display", "none");  $("#submit-projects").hide(); $("#map").hide(); }
		            if(count < 4) {  $("#show").css("display", "inline"); }
		            else {   $("#show").css("display", "none"); }
		        });
            });
    	
		
		</script>
	
	</body>
	

	
	<!-- FIND WHERE TO MOVE THIS -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&libraries=places&callback=initMap" async defer></script>
  
</html>