$('#geolocate').click(function() {
console.log('ok');
	    navigator.geolocation.getCurrentPosition(function(position) {
	    	var lat = position.coords.latitude;
	    	var lng = position.coords.longitude;
	    	$('#lat').val(lat);
	    	$('#lng').val(lng);
	    	return false;
	    });
});