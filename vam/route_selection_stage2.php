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
	require('check_login.php');
	include ("./helpers/get_metar.php");
	$route = $_GET['route'];
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$sql = "SELECT DISTINCT r.route_id,r.flight flight, f.fleet_id, registry as reg,
	status , plane_description, r.departure, r.arrival, duration, etd,eta,pax_price,flproute,comments, alternative, flight_level
	FROM gvausers gu, fleets f, fleettypes ft, routes r, fleettypes_gvausers ftgu, fleettypes_routes ftro
	WHERE gu.gvauser_id = ftgu.gvauser_id
	AND ftgu.fleettype_id = f.fleettype_id
	AND ft.fleettype_id = f.fleettype_id
	AND ft.fleettype_id = ftgu.fleettype_id
	AND ftro.fleettype_id = f.fleettype_id
	AND ft.fleettype_id = ftro.fleettype_id
	AND ftro.route_id = r.route_id
	AND r.departure = gu.location
	AND gu.gvauser_id =$id 
	AND f.location = gu.location
	AND	f.booked = 0	
	AND r.route_id=$route order by plane_description, registry asc";

	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo AVAILABLE_AIRCRAFT; ?></div>
			<div class="table-responsive">
			<!-- Table -->
			<table class="table table-hover">
				<?php

					echo "<tr><th>" . BOOK_ROUTE_FLIGHT . "</th><th>" . BOOK_ROUTE_DEPARTURE . "</th><th>" . BOOK_ROUTE_ARRIVAL . "</th><th>" . BOOK_ROUTE_ARICRAFT_TYPE . "</th><th>" . BOOK_ROUTE_ARICRAFT_REG . "</th><th>" . BOOK_ROUTE_ARICRAFT_STATUS . "</th><th>" . BOOK_ROUTE_ARICRAFT_BOOK . "</th></tr>";
					while ($row = $result->fetch_assoc()) {
						echo "<td>";
						$etd = $row["flight"];
						$eta = $row["eta"];
						$duration = $row["duration"];
						$etd = $row["etd"];
						$eta = $row["eta"];
						$departure = strtoupper($row["departure"]);
						$arrival = strtoupper($row["arrival"]);
						$price = $row["pax_price"];
						$flproute= $row["flproute"];
						$flight_level= $row["flight_level"];						
						$comments = $row["comments"];
						$alternative = strtoupper($row["alternative"]);
						echo $row["flight"] . '</td><td>';
						$ioio = $row["flight"];
						echo '<a href="./index_vam_op.php?page=airport_info&airport=' . $row["departure"] . '">' . $row["departure"] . '</a></td><td>';
						echo '<a href="./index_vam_op.php?page=airport_info&airport=' . $row["arrival"] . '">' . $row["arrival"] . '</a></td><td>';
						echo $row["plane_description"] . '</td><td>';
						echo $row["reg"] . '</td><td>';

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
							echo '<a href="./index_vam_op.php?page=route_reserve_plane&plane=' . $row["fleet_id"] . '&route=' . $row["route_id"] . '"><IMG src="images/Edit-Validated-48.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
						}
							echo "</table>";
							$db->close();
						?>
			</table>
			</div>
		</div>
	</div>
	<div class="clearfix visible-lg"></div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo BOOK_ROUTE_INFO; ?></div>
			<table class="table table-hover">
				<tr>
					<td><strong><?php echo BOOK_ROUTE_DURATION; ?></strong></td>
					<td><?php echo $duration ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_ALTERNATIVE; ?></strong></td>
					<td><?php echo $alternative ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_TIME_DEP; ?></strong></td>
					<td><?php echo $etd ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_TIME_ARR; ?></strong></td>
					<td><?php echo $eta ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_ROUTE; ?></strong></td>
					<td><?php echo $flproute ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo VAMACARS_FLIGHT_LEVEL; ?></strong></td>
					<td><?php echo $flight_level ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_PRICE; ?></strong></td>
					<td><?php echo $price ; ?></td>
				</tr>
				<tr>
					<td><strong><?php echo BOOK_ROUTE_COMMENTS; ?></strong></td>
					<td><?php echo $comments ; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo AIRPORT_AIRPORT_METAR; ?></div>
			<table class="table table-hover">
				<tr>
					<?php
						get_metar($departure);
					?>
				</tr>
			</table>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo AIRPORT_AIRPORT_METAR; ?></div>
			<table class="table table-hover">
				<tr>
					<?php
						get_metar($arrival);
					?>
				</tr>
			</table>

		</div>
	</div>
</div>
