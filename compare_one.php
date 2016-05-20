<!DOCTYPE html>
<?php
/*session_start();

$pic = $_POST['pic'];
$score = $_POST['score'];
$address = $_POST['address'];
$bio = $_POST['bio'];
$amenities = $_POST['amenities'];
*/
?>
<html>
<head>
    <title>View Property</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <script type="text/javascript" src="js/houseClass.js"></script>
</head>
<body>
    <div class="viewHome"> 
    <div class="top">
        <div class="house_left"><img src="images/house-lady.jpg" alt="house" style="height: 250px; width: 250px;"/></div>
        <div class="score_right">
            <h2 id="score">230</h2>
            <h4 id="address">123 bruce</h4>
        </div>
    </div>
    <div></div>
    <div class="amenities">
       <p id="amen"></p>
    </div>
    </div>
    
</body>
</html>

<script >
    
    //var a = new Array();
    var house1 = new House(12, "123 main st.");
    //house1.fillArray();
    document.getElementById("address").innerHTML = house1.address;


    
</script>