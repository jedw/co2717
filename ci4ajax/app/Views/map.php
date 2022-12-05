<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	var points = [];	
	var marker;
	$(document).ready(function(){
		var promise = $.ajax({
			url: '<?php echo site_url();?>/Home/coordinates',
			dataType: 'json',
			async: true,
			success: function (result) {
				$.each(result, function( index, value ) {
					points.push(value);
				});		
			}
		});		
		function initialize() {
			var mapProp = {
				center:new google.maps.LatLng(53.7633421,-2.7043016),
				zoom:15,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			promise.done(function(){
				points.forEach(function(point){
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(point.lat, point.lon),
						title: point.team,
						map: map,
					})
				});
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);			
	});
	</script>
</head>
<body>
    <body>
        <div id="googleMap" style="width:640px;height:480px;"></div>
    </body>
</body>
</html>