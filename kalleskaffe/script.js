function initMap() {
	var kalleskaffe = {lat:55.65876611, lng:12.63101578};
			
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: kalleskaffe,
			mapTypeId: 'terrain'
		});

		var marker = new google.maps.Marker({
			position: kalleskaffe,
			map: map
		});
}