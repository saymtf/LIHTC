<!DOCTYPE html>
 <script src="js/houseClass.js">
 //var a = new Array();
    var house1 = new House("Picture", 12, "This is the address", "Bio goes here");
    
  //  house1.fillArray();
</script>
<html>

<head>
    <title>View Property</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
    <div class="container">
        <form action="compare_one.php" method="post">
        <div class="home1">
           <button name="submit_home" id="submit_home" type="submit" class="viewHome">
     
                <div class="top">
                    <div class="house_left"><img src="images/house-03.jpg" name="img" alt="house" style="height: 250px; width: 250px;" /></div>
                    <input type="hidden" value="house-03.jpg" name="pic" />
                    <div class="score_right">
                        <h2>LIHTC Score</h2>
                        <input type="hidden" value="LIHTC Score" name="score" />
                        <h4>Address: 321 sesame str.</h4>
                        <input type="hidden" value="Address: 321 sesame str." name="address" />
                        <p>HI</p>
                        <input type="hidden" value="HI" name="bio" />
                    </div>
                </div>
                <div></div>
                <div class="amenities">
                    <p> Closest Store : x mi. Closest Hospital: y mi. . . .</p>
                    <input type="hidden" value="Closest Store : x mi. Closest Hospital: y mi. . . ." name="amenities" />
                </div>
            </div>
            </button>
        </div>
        
        <div class="home2">
            <button name="submit_home" id="submit_home" type="submit" class="viewHome">
                <div class="top">
                    <div class="house_left"><img src="images/house-up.jpg" alt="house" style="height: 250px; width: 250px;" /></div>
                    <input type="hidden" value="house-up.jpg" name="pic" />

                    <div class="score_right">
                        <h2>lihtc SCORE</h2>
                        <input type="hidden" value="lihtc SCORE" name="score" />

                        <h4>Address: 1355 Market Str.</h4>
                        <input type="hidden" value="Address: 1355 Market Str." name="address" />

                        <p>yo :)</p>
                        <input type="hidden" value="yo :)" name="bio" />
                    </div>
                </div>
                <div></div>
                <div class="amenities">
                    <p> CLOSEST Store : x mi. Closest Hospital: y mi. . . .</p>
                     <input type="hidden" value="CLOSEST Store : x mi. Closest Hospital: y mi. . . ." name="amenities" />
                </div>
            </div>
            </button>
        </div>
        </form>
    </div>
</body>

</html>