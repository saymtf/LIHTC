var count = 0;

function displayInstructions() {
     $('#instructions').toggle('slide');
}


function initForm() {
	/* Set the Three Other TextFields Hidden */
    for(i = 1; i <= 4; i++) {
        var inputs = "#input".concat(i.toString());   
         $(inputs).hide();
    }
    arrayForMarkers = [];
    markers = [];
    elements = [];
    count = 0;
   // $("#submit-to-panel").css("display", "none");
    $("#address-text").empty();
    $("#map").css("display", "none");
    $("#hide").css("display", "none");
    $("#submit-projects").css("display", "none");
                
}                

function showItem() {	
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
		   
}


function removeItem() {
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
}

function setToNull() {
    $("#address-text").val("");
    initForm(); // init form sets everything fresh.. why not call it again?
}