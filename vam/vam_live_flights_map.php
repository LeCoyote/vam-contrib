<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licensed under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<!DOCTYPE html>
<html>
<head>
	<script
		src="http://maps.googleapis.com/maps/api/js">
	</script>
	<meta http-equiv="refresh" content="300">

</head>

<body>
<?php
	include('./db_login.php');
	$db_map = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db_map->set_charset("utf8");
	if ($db_map->connect_errno > 0) {
		die('Unable to connect to database [' . $db_map->connect_error . ']');
	}
	$sql_map = "select * from vam_live_flights lf, gvausers u where u.gvauser_id=lf.gvauser_id";
	
	if (!$result = $db_map->query($sql_map)) {
		die('There was an error running the query  [' . $db_map->error . ']');
	}
	unset($flights_coordinates);
	unset($flight);
	unset($liveflights);
	unset($datos);
	unset($jsonarray);
	$flights_coordinates = array();
	$datos = array ();
	$flight = array();
	$liveflights = array ();
	$jsonarray = array ();
	$index = 0;
	$index2=0;
	$flightindex=0;
	while ($row = $result->fetch_assoc()) {
			$flight["gvauser_id"]=$row["gvauser_id"];
			$flight["callsign"]=$row["callsign"];
			$flight["name"]=$row["name"];
			$flight["gs"]=$row["gs"];
			$flight["altitude"]=$row["altitude"];
			$flight["surname"]=$row["surname"];
			$flight["departure"]=$row["departure"];
			$flight["arrival"]=$row["arrival"];
			$flight["latitude"]=$row["latitude"];
			$flight["longitude"]=$row["longitude"];
			$flight["flight_status"]=$row["flight_status"];
			$flight["heading"]=$row["heading"];
			$liveflights[$flightindex] =$flight;
			
		$sql_map2 = "select * from vam_live_acars where flight_id='".$row["flight_id"]."' order by id asc";
		if (!$result2 = $db_map->query($sql_map2)) {
			die('There was an error running the query  [' . $db_map->error . ']');
		}
			
			while ($row2 = $result2->fetch_assoc()) {
				$flights_coordinates ["gvauser_id"] = $row2["gvauser_id"];
				$flights_coordinates ["latitude"] = $row2["latitude"];
				$flights_coordinates ["longitude"] = $row2["longitude"];
				$flights_coordinates ["heading"] = $row2["heading"];
				$datos [$index2][$index] = $flights_coordinates;
				$index ++;
				}
		$index=0  ;
		$index2 ++;
		$flightindex ++;
	}

	$jsonarray[0]=$liveflights;
	$jsonarray[1]=$datos;

?>


<div class="container">
	<div class="row">
		<div id="map-outer" class="col-md-11">
			<div id="map-container" class="col-md-12"></div>
		</div><!-- /map-outer -->
	</div> <!-- /row -->

</div><!-- /container -->

<style>
	body { background-color:#FFFFF }
	#map-outer {
		padding: 0px;
		border: 0px solid #CCC;
		margin-bottom: 0px;
		background-color:#FFFFF }
	#map-container { height: 500px }
	@media all and (max-width: 991px) {
		#map-outer  { height: 650px }
	}
</style>


</body>
<script type="text/javascript">
	var mapCentre;
	var map ;
	function init_map() {
		

		var flights = <?php echo json_encode($jsonarray[0]); ?>;
		var locations = <?php echo json_encode($jsonarray[1]); ?>;
		var numpoints=(locations.length);
		console.log(locations);
		var var_location = new google.maps.LatLng(<?php echo $datos[0][0]["latitude"]; ?>,<?php echo $datos[0][0]["longitude"]; ?>);
		

		var var_mapoptions = {
			center: var_location,
			zoom: 5,
			styles: [{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF",}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]
		};
		map = new google.maps.Map(document.getElementById('map-container'),
		var_mapoptions);
		

		var mapas=[];
		
		var flightPlanCoordinates=[];
		
		var flightPath = new google.maps.Polyline({
		strokeColor: "#c3524f",
		strokeOpacity: 1,
		strokeWeight: 2,
		geodesic: true
		});
		
		var k=0;
		var z=0;
			
		var coordinate;
		while (k<numpoints) {
			while (z < locations[k].length)
			{
				coordinate =new google.maps.LatLng(locations[k][z]['latitude'],locations[k][z]['longitude']);
				flightPlanCoordinates.push(coordinate);
				z=z+1;
			}
			
			ruta = new google.maps.Polyline({
			geodesic: true,
			strokeColor: '#FF0000',
			strokeOpacity: 1.0,
			strokeWeight: 2
			});
			ruta.setPath(flightPlanCoordinates);
			mapas.push(ruta);
			z=0;
			k=k+1;
		};

		function createMarker(pos, t) {
		var coord=[];
		var pathcoord=[];
		var flight_id = t;
		currentPath = new google.maps.Polyline({
			geodesic: true,
			strokeColor: '#FF0000',
			strokeOpacity: 1.0,
			strokeWeight: 2
			});

		var icon_plane = 'images/plane.png';
		var marker = new google.maps.Marker({       
			position: pos, 
			icon: icon_plane,
			name: t ,
			contenido: flights[t]['departure'] + '-' + flights[t]['arrival'] + '<br />' + flights[t]['callsign']+ ' '+flights[t]['name']+ ' '+flights[t]['surname'] + '<br />' + 'ALTITUDE: ' + flights[t]['altitude'] + '<br />' + 'GS: ' + flights[t]['gs']+ '<br />' + 'HEADING: ' + flights[t]['heading'] + '<br />' + flights[t]['flight_status'] 
		}); 
		google.maps.event.addListener(marker, 'click', function() { 
		   infowindow.open(map,marker);
		   infowindow.setContent(marker.contenido);
		   var s=0;
		   coord.length = 0;
		   pathcoord.length = 0;
		  while (s < locations[flight_id].length)
			{
				coord= new google.maps.LatLng(locations[flight_id][s]['latitude'],locations[flight_id][s]['longitude']);
				pathcoord.push(coord);
				s=s+1;
			}
			currentPath.setPath(pathcoord);
			currentPath.setMap(map);
		}); 
		return marker;  
	}

		var numflight=0
		while (numflight < flights.length )
		{
			var avionicon =new google.maps.LatLng(flights[numflight]['latitude'],flights[numflight]['longitude']);
			var m1 = createMarker(avionicon, numflight);
			m1.setMap(map);
			numflight = numflight +1;
		}
		
		var s=0;
		while (s < mapas.length)
		{
			s=s+1;
		}
		
		var infowindow = new google.maps.InfoWindow({

		  });
	}

	google.maps.event.addDomListener(window, 'load', init_map);
	
	$( document ).ready(refreshflights);

	function refreshflights(){
		setInterval(function () {$.ajax({                                      
			  url: 'get_map_coordinates.php',                        
			  data: "",                        
			  dataType: 'json',                 
			  success: function(data, textStatus, jqXHR) {
				init_map();	
				}
			})}, 120000);
	}			
</script>
</html>