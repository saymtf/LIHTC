
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
    
   
    
    for(var j in arrayforMarkers )
    {
        for(var p = 0; p < arrayforMarkers[j].length; p++ )
        {
             console.log(arrayforMarkers[j][p]);
        
        }
    }
    