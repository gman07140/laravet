// declare map as global variable
var map = null;

// once the window has loaded...
$(window).load(function() {
    var mapOptions = {
          center: new google.maps.LatLng(-3.07720140, -59.97550380),
          zoom: 12
        };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

// Function for adding a marker to the page.
function addMarker(location) 
{
    marker = new google.maps.Marker({
        position: location,
        map: map
    });
}

$( document ).ready(function() {
  	var lat = $('#lat').html();
  	var lng = $('#lng').html();
	var latlng = new google.maps.LatLng(lat,lng);
	addMarker(latlng);
});

});