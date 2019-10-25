$(document).ready(function(){

	//mobile menu
	$('.nav').slicknav();

 //google map api  
	function initialize() {
		var mapCanvas1 = document.getElementById('map');
		
    	var mapOptions1 = {
      		center: new google.maps.LatLng(42.308477, -82.939948),
     		zoom: 15,
     		mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
	
    	var map1 = new google.maps.Map(mapCanvas1, mapOptions1);
	
		var pinmap1 = new google.maps.LatLng(42.308477, -82.939948);
	
		var marker1 = new google.maps.Marker({
			position: pinmap1,
			map: map1,
			title:'Hindu Temple And Cultural Center of Windsor'
		});
	
	}
	google.maps.event.addDomListener(window, 'load', initialize);
//end google map api  
});