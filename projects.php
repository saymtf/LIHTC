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
  	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/styles.css">
	  <link rel="stylesheet" href="css/mainsheet.css">
	 
	  <title>LIHTC</title>
	 
    
    <script>
	  function find_home() {
      document.getElementById('map').style.visibility = 'visible';
    }
    
    
	  function find_project() {
      document.getElementById('map').style.visibility = 'hidden';
    }
	  </script>
	  
  </head>
  <body>
    <div id="wrapper">
      
      
    </div><!-- EOF Wrapper -->
  </body>

  <script> 
  
      document.getElementById("find_project").addEventListener("find_project", myFunction);
      document.getElementById("find_home").addEventListener("find_home", myFunction);
      
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs93ZAV_p2ZjMeFnefULIlEH0I8JDi3I&callback=initMap"
    async defer></script>   
  
 
</html>