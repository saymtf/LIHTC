<!DOCTYPE html>
<?php
session_start();

$pic = $_POST['pic'];
$score = $_POST['score'];
$address = $_POST['address'];
$bio = $_POST['bio'];
$amenities = $_POST['amenities'];

?>
<html>
<head>
    <title>View Property</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
    <div class="viewHome"> 
    <div class="top">
        <div class="house_left"><? echo "<img src=\"images/'. $pic .'\" alt="house" style="height: 250px; width: 250px;"/>"</div>
        <div class="score_right"><h2><?php echo $score?></h2><h4><?php echo $address ?></h4><p><?php echo $bio?></p></div>
    </div>
    <div></div>
    <div class="amenities">
       <p> <?PHP echo $amenities ?>
        </p>
    </div>
    </div>
    <a href="js/houseClass.js">Click</a>
</body>
</html>

<script>
    var House = function (picture, score, address, bio) {
        this.picture = picture;
        this.score = score;
        this.address = address.Accounts;
        this.bio = bio;
        this.amenities = [];
    };
    
    House.prototype.fillArray = function () {
        //figure out how to fill array with strings from Maps API
        console.log("asdf");
    };
    
    //var a = new Array();
    var house1 = new House("", 12, "", "");
    
    house1.fillArray();
    
    
</script>