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
  	<script type="text/javascript" src="js/maps.js"></script>
  	<link rel="stylesheet" href="css/stylesheet.css">
	 
	  <title>LIHTC</title>

  </head>
  <body>
    <div id="wrapper">
     
     <!-- Display Text Fields -->
      <div id="text_fields">
        <?php
	  
	        /**
	        * Input fields should dynamically display project/home input fields 
	        * for users to narrow down their wanted location
	        */
	       function inputFields($user_choice) {
	          if(user_choice == "find_home") {
	            // Display Income Field
	            $country = ""; 
	            $state = "";
	            $city = "";
	            $zip = "";
	            $income = "";
	       ?>
	           
	           <!-- HOME -->
	            <form action="">
                Country: <input type="text" name="country"><br>
                State: <input type="text" name="state"><br>
                City: <input type="text" name="state"><br>
                Income: <input type="text" name="state"><br>
                <input type="submit" value="Submit">
              </form> 
          
          <?php
	          }else {
	          // Don't display Income Field
	            $address = "";
	            ?>
	            
	            <!-- PROJECT HOME -->
	            <form action="">
                Address: <input type="text" name="country"><br>
                <input type="submit" value="Submit">
                <i class="fa fa-plus-square-o fa-2x"></i>
              </form> 
	            
	            <?php
	          }
	       }
	      ?>
        
        
        
      </div>        
      
      <!-- Display Map -->
      <div id="map"></div>
    
            
    </div><!-- EOF Wrapper -->
  </body>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&callback=initMap"
    async defer></script>   
  
 
</html>