<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licenced under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<?php
	$planetype = '';
	$planelocation = '';
	$panel_title = FLEET_VA;
	$callsign='';

	/*$sql = "select gv.callsign as callsign , re.gvauser_id, hu.hub_id,hub, h.status as hangar,f.registry as registry,f.status,f.hours,f.name, f.booked , ft.plane_icao, f.location from fleets f 
			inner join  fleettypes ft on f.fleettype_id=ft.fleettype_id 
			left outer join reserves re on f.fleet_id = re.fleet_id
			left outer join hangar h on f.fleet_id = h.fleet_id 
			inner join hubs hu on hu.hub_id = f.hub_id 
			left outer join gvausers gv on re.gvauser_id = gv.gvauser_id
			order by plane_icao, location,registry asc";*/
			
	$sql = "select gv.callsign as callsign , f.gvauser_id, hu.hub_id,hub, ha.status as hangar,f.registry as registry,f.status,f.hours,f.name, f.booked , 
			ft.plane_icao, f.location  
			from fleets f left outer join (select registry,status from hangar where status=1) ha 
			on f.registry = ha.registry 
			inner join  fleettypes ft on f.fleettype_id=ft.fleettype_id 
			inner join hubs hu on hu.hub_id = f.hub_id 
			left outer join gvausers gv on f.gvauser_id = gv.gvauser_id";

	if (!isset($_GET["plane_icao"]) || trim($_GET["plane_icao"]) == "") {
	} else {
		$planetype = $_GET['plane_icao'];
		$panel_title = FLEET_VA_TYPE . $planetype;
		
		$sql = "select gv.callsign as callsign, f.gvauser_id ,f.registry as registry,plane_icao,f.location as location,f.hub_id as hub_id, hub, f.status as status,f.name as name,f.hours as hours ,booked, hangar 
from fleets f inner join  hubs h  on h.hub_id = f.hub_id inner join fleettypes ft on f.fleettype_id=ft.fleettype_id 
left outer join reserves re on f.fleet_id = re.fleet_id
left outer join (select registry,status from hangar where status=1) ha on f.registry = ha.registry 
left outer join gvausers gv on f.gvauser_id = gv.gvauser_id
where  ft.plane_icao ='$planetype'  
order by plane_icao, f.location,f.registry asc";



	}
	if (!isset($_GET["plane_location"]) || trim($_GET["plane_location"]) == "") {
	} else {
		$planelocation = $_GET['plane_location'];
		$panel_title = FLEET_VA_LOC . $planelocation;
		
		$sql = "select gv.callsign as callsign, f.gvauser_id,f.registry as registry,plane_icao,f.location as location,f.hub_id as hub_id, hub, f.status as status,f.name as name,f.hours as hours ,booked, hangar from fleets f inner join  hubs h  on h.hub_id = f.hub_id inner join fleettypes ft on f.fleettype_id=ft.fleettype_id 
left outer join reserves re on f.fleet_id = re.fleet_id
left outer join (select registry,status from hangar where status=1) ha on f.registry = ha.registry 
left outer join gvausers gv on f.gvauser_id = gv.gvauser_id
where  f.location ='$planelocation'   
order by plane_icao, f.location,f.registry asc";

	}

	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo $panel_title; ?></div>
			<div class="table-responsive" style="height:700px;overflow:auto"><table class="table table-hover">
			<!-- Table -->
			<table class="table table-hover">
				<?php
					echo "<tr><th>" . REGISTRY . "</th><th>" . TYPE . "</th><th>" . LOCATION_PLANE . "</th><th>" . HUB . "</th><th>" . STATUS_PLANE . "</th><th>" . HOURS_PLANE . "</th><th>" . NAME_PLANE . "</th><th>" . BOOKED_PLANE . "</th><th>" . INFO_PLANE . "</th></tr>";
					while ($row = $result->fetch_assoc()) {
						echo "<td>";
						echo $row["registry"] . '</td><td>';
						echo '<a href="./index.php?page=fleet_public&plane_icao=' . $row["plane_icao"] . '">' . $row["plane_icao"] . '</a></td><td>';
						echo '<a href="./index.php?page=fleet_public&plane_location=' . $row["location"] . '">' . $row["location"] . '</a></td><td>';
						echo '<a href="./index.php?page=hub&hub_id=' . $row["hub_id"] . '">' . $row["hub"] . '</a></td><td>';
						if  ($row["status"]>=70){
							$bar='progress-bar-success';
						}
						elseif ($row["status"]<70 || $row["status"]>=35 )

							$bar='progress-bar-warning';

						if ($row["status"]<35  )

							$bar='progress-bar-danger';
						?>
						<div class="progress">
						  <div class=" <?php echo $bar ?>" role="progressbar" aria-valuenow="70"
						  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row["status"]?>%">
							<?php echo $row["status"]. '</td><td>'; ?>
						  </div>
						</div>
						<?php
						echo $row["hours"] . '</td><td>';
						echo $row["name"] . '</td><td>';
						if ($row["hangar"] == 1) {
							echo PLANE_MAINTENANCE . '</td><td>';
						} else {
							if ($row["booked"] == 1) {
								echo PLANE_BOOKED .'-['.$row["callsign"]. '] </td><td>';
							} else {
								echo PLANE_FREE . '</td><td>';
							}
						}
						echo '<a href="./index.php?page=plane_info_public&registry_id=' . $row["registry"] . '"><IMG src="./images/info.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
					}
					$db->close();
				?>
			</table>
			</div>
		</div>
	</div>

	<div class="clearfix visible-lg"></div>
</div>
