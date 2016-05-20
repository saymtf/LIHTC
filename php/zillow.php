<?php 
	$url = 'http://www.zillow.com/webservice/GetRegionChildren.htm?zws-id=X1-ZWz1f8kywst72j_3tnpx&state=CA&city=Salinas&county=monterey'; 
	$data = simplexml_load_string(file_get_contents($url));
	/* OUTPUT
	   <list>
	    <region>
	        <id>97470</id>
	        <name>93905</name>
	        <zindex currency="USD">275300</zindex>
	        <latitude>36.67368</latitude>
	        <longitude>-121.612042</longitude>
	    </region>
	   ..
	   </list>
	*/	
	
	
    $lat = array();
	$lng = array();
	foreach($data->response->list->region as $item)
    {
        $latitude = (string)$item->latitude;
        $longitude = (string)$item->longitude;
        array_push($lat, $latitude);
	    array_push($lng, $longitude);
	    
    }
    $crd = array();
    array_push($crd, $lat);
    array_push($crd, $lng);
	echo json_encode($crd);
?>