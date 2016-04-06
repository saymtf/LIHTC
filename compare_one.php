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
        <div class="house_left"><? echo "<img src=\". $pic .\" alt="house" style="height: 250px; width: 250px;"/>"</div>
        <div class="score_right"><h2><?php echo $score?></h2><h4><?php echo $address ?></h4><p><?php echo $bio?></p></div>
    </div>
    <div></div>
    <div class="amenities">
       <p> <?PHP echo $amenities ?>
        </p>
    </div>
    </div>
</body>
</html>