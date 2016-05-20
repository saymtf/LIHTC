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
  	<script type="text/javascript" src="js/form.js"></script>
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
                        <div class="address-fields">
					        <h1 class="content-title">Enter Your Project Location(s) Below</h1>
					        	<h5 id="project-instruction"><!--<span class="fa fa-info-circle fa-3x" id="info_field"></span>--> Click For Instructions</h5>
					        	<div id="instructions">
					        		<p>Type your address below then click '<i>Add Address</i>'. <br /> '<i>Remove Address</i>' the latest address inserted.</p>
					        		<p>After adding all the addresses you're interested in, press '<i>submit</i>'.</p>
					        		<p>A Map will show locations of the addresses.<br /> <strong style="font-weight:bold;">You are allowed to compare up to 4 addresses.</strong></p>
                            	</div>
                            	<hr />
                            	<div id="address">
                            		<input type="text" id="address-text" placeholder="123 Embarcadero st, San Francisco, CA" />
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
						<div id="home-fields">
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
							This Low Income Housing project was created by four CSUMB students: Alonso Mendoza, Jose Diaz, Miranda Trayford, and Thane Fenton. 
							</p>
							
							<p>
							The LIHTC project was proposed by Eliza Childs, an employee at Thoughtworks, who wanted to provide contractors
							with an easy solution to calculate the low income housing tax credit (LIHTC) score for a specified property to develop
							low income housing for those who need them. This site allows you to compare up to four properties at once for both contractors
							and homebuyers.
							</p>
						</div>
						
						<hr />
						<div id="about-us-content">	<p><a id="about-thoughtworks" href="https://www.thoughtworks.com/about-us" target="_blank">Learn more about Thoughtworks</a></p> </div>
						<!--<h1 style="color:000;"><b>TESTING PAGES</b></h1>
						<h3><a href="compare_one.php">Compare</a></h3>
						<h3><a href="compare_two.php">Compare TWO</a></h3>
						<h3><a href="compare_four.php">Compare Four</a></h3>-->
						
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
			<!-- EOF About Us -->	
				
			<!-- Panel items for project homes -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							
							<p id="address-name"></p>
							<div class="viewHome"> 
    							<div class="top">
       								 <div class="house_left"><div id="mapPanel1"></div></div>
       									 <div class="score_right">
       									 	<h2 id="score" style="font-size: 400%; font-weight: 900; width:400%">LIHTC Score: </h2>
       									 	<h4 id="addressPanel1" style="font-size: 250%; font-weight: 400; width:300%"></h4>
       									 	 
       									 </div>
    							</div>
    									
   									 <div class="amenities">
   									 	<span id="p1"></span>
   									 	<p style="font-size: 250%; font-weight: 900">Closest Amenities:</p>
      									 <p id="amen"><span id="p11" style="font-size: 130%"></span></p>
   									 </div>
  								  </div>
							
    					</div>
    				</div>	
					<div data-panel="panel-2">
						<div>
							<div id="testing">
								
								
								
							<!--	<div id="mapPanel2"></div>-->
								<div class="container">
        
        <div class="home1">
                <div class="top">
                    <div class="house_left"><div id="mapPanel2"></div></div>
                    <div class="score_right">
                        <h2>LIHTC Score</h2>
                        <h4>Address: 321 sesame str.</h4>
                        <p>HI</p>
                    </div>
                </div>
                <div></div>
                <div class="amenities"><p id="p2"></p></div>
            </div>

        <div class="home2">
                <div class="top">
                    <div class="house_left"><div id="mapPanel12"></div></div>
                    <div class="score_right">
                        <h2>lihtc SCORE</h2>
                        <h4>Address: 1355 Market Str.</h4>
                        <p>yo :)</p>
                    </div>
                </div>
                <div></div>
                <div class="amenities">
					<p id ="p1p2"></p>
                </div>
            </div>
            
        </div>
       
								
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
 
    <script>
    	
    </script>
    
	<script>
		var arrayForMarkers = [];
        var markers = [];
    	var elements = [];
		var panelTurn = 0;
		var firstmarkers;
		var secMark;
		$(function() {	Boxlayout.init(); }); // Init the boxlayout
		
		// Functionality for the forms
		$("#submit-projects").click(function() {
    		var $panelName = "panel-".concat(count);
			$("li").data("panel", $panelName);
			
			test(window.arrayForMarkers, window.elements);
			if(panelTurn > 1)
            {
            	console.log("Panel turn " + panelTurn);
          		secMap(firstmarkers,secMark);
            }

		});
		
	
		
		
		$(document).ready(function() {
			// User presses enter
			$('#address-text').keypress(function(e){
      			if(e.keyCode == 13) {
      				$('#show').click();
      			}
    		});
		
			$('#project-instruction').on('click', displayInstructions); // user clicks instructions> project home
			initForm();
			$("#show").click(showItem);
			$("#hide").click(removeItem);
			$(".bl-content-icon-close").click(setToNull);
			
			/** Home Map **/
			$("#submit-to-panel").click(function() {
				var state = $("#state-field").val();
				var city = $("#city-field").val();
				var annual = $("#annual-field").val();
			
				findLocationByName(state, city); 
				
				
			});	
		});
			
		/* When user creates new address, map appears with this information obtained.. */
        $(document).ready(function(){
        	$('#show').on('click', function() {
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
            	        // individualSearch(markers,document.getElementById('address-text'));
            	        if(panelTurn == 0)
            	        	firstmarkers = markers;
            	        else
            	        	secMark = markers;
            	       
        	            },
    	                complete: function(data, status) {
	                       /* alert(status); */ // DEBUG
	                       $("#address-text").val("");
	                        panelTurn++;
                    	}
            		});
            		
                }
           });
    	});
		
		$.get( "php/zillow.php",
			function(data, status) {
				// Return Zillow Data from zillow.php
			/* alert(data[2]); */
			// GRAbbing every individual char rather than a string
		});
	
	
		</script>
		
		
	</body>
	

	
	<!-- FIND WHERE TO MOVE THIS -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&libraries=places&callback=initMap" async defer></script>
  
</html>