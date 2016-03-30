function visible() {
    // This code adds and removes a form field
    var count = 0;
		    
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
}	    
	
function addMarker() { 
    var arrayForMarkers = [];
    var markers = [];
    
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
        
        markers = {lat:lat, lng:lng, address:address};
        arrayForMarkers.push(markers);
        
        updateMap(lat, lng, count, address);
        },
        complete: function(data, status) {
            /* alert(status); */ // DEBUG
        }
    });
           
});
}