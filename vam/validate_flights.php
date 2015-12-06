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
<?php
	if ($_SESSION["access_flight_validator"] == '1')
	{	
		include('calculate_flight_finances.php');
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");


	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	include ('review_pilot_rank.php');

	$sql = "select pirep_id as id,gu.gvauser_id,callsign,pirep_id as flight,from_airport departure, to_airport arrival ,DATE_FORMAT(date,'%d-%m-%Y') as date,distance,duration,charter, 'pirep' as type from pireps p , gvausers gu where p.gvauser_id=gu.gvauser_id and valid=0 UNION select pirepfsfk_id as id,gu.gvauser_id,callsign,pirepfsfk_id as flight, SUBSTRING(OriginAirport,1,4) departure, SUBSTRING(DestinationAirport,1,4) arrival , DATE_FORMAT(CreatedOn,'%d-%m-%Y') as date, DistanceRoute as distance, FlightTime as duration, charter , 'keeper' as type from pirepfsfk pf, gvausers gu where pf.gvauser_id=gu.gvauser_id and validated=0 UNION select report_id as id,pilot_id, gu.callsign, report_id as flight ,origin_id as departure, destination_id as arrival, date, distance, duration, charter as charter, 'fsacars' as type from reports r , gvausers gu where r.pilot_id=gu.gvauser_id and validated=0  UNION select flightid as id,r.gvauser_id, gu.callsign, id as flight , departure,  arrival, DATE_FORMAT(flight_date,'%d-%m-%Y') as  date, distance, flight_duration, charter as charter, 'vamacars' as type from vampireps r , gvausers gu where r.gvauser_id=gu.gvauser_id and validated=0  order by date desc";

	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo VALIDATE_FLIGHTS; ?></div>

			<!-- Table -->
			<table class="table table-hover">
				<?php
					echo "<tr><th>" . VALIDATE_CALLSIGN . " </th><th>" . VALIDATE_DEPARTURE . "</th><th>" . VALIDATE_ARRIVAL . "</th><th>" . VALIDATE_DATE . "</th><th>" . VALIDATE_DURATION . "</th><th>" . VALIDATE_DISTANCE . "</th><th>" . VALIDATE_TYPE . "</th><th>" . VALIDATE_ACTION . "</th><th>" . VALIDATE_LOG . "</th></tr>";
					while ($row = $result->fetch_assoc()) {
						echo "<td>";
						echo '<a href="./index_vam_op.php?page=pilot_details&pilot_id=' . $row["gvauser_id"] . '">' . $row["callsign"] . '</a></td><td>';
						echo $row["departure"] . '</td><td>';
						echo $row["arrival"] . '</td><td>';
						echo $row["date"] . '</td><td>';
						echo number_format($row["duration"] , 2) . '</td><td>';
						echo number_format($row["distance"] , 0) . '</td><td>';
						if ($row["charter"] == 1) {
							echo VALIDATE_CHARTER . '</td><td>';
						} else {
							echo VALIDATE_REGULAR . '</td><td>';
						}
						echo '<a href="./index_vam_op.php?page=acept_flight&flight=' . $row["flight"] . '&gvauser_id=' . $row["gvauser_id"] . '&type=' . $row["type"] . '&departure=' . $row["departure"] . '&arrival=' . $row["arrival"] . '"><IMG src="images/OK32.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a>
				<a href="./index_vam_op.php?page=reject_flight&flight=' . $row["flight"] . '&gvauser_id=' . $row["gvauser_id"] . '&type=' . $row["type"] . '&departure=' . $row["departure"] . '&arrival=' . $row["arrival"] . '"><IMG src="images/KO32.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td><td>';
						if ($row["type"] == 'pirep') {
							echo '<a href="./index_vam_op.php?page=validate_manual_report&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
						}
						elseif ($row["type"] == 'keeper'){
							echo '<a href="./index_vam_op.php?page=validate_fskeeper&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
						}						elseif ($row["type"] == 'vamacars'){							echo '<a href="./index_vam_op.php?page=validate_vam_acars&flight_id=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';						}						
						else {
							echo '<a href="./index_vam_op.php?page=validationFSACARSDetails&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
						}
					}
				}
				else
				{
					echo '<div class="alert alert-danger"> You do not have access to Flights validator</div>';
				}
				?>
			</table>
		</div>
	</div>
	<div class="clearfix visible-lg"></div>
</div>
<!-- TOUR VALIDATION -->
<?php
	$sql='select tour_pilot_id,a.gvauser_id as gvauser_id,a.status,a.report_date as report_date,departure,arrival,callsign, a.report_date as report_date, a.tour_id,a.tour_name, a.leg_id from gvausers gva,
  (select tour_pilot_id ,status,report_date,tour_name, t.tour_id as tour_id, gvauser_id,leg_id from tour_pilots tp , tours t
WHERE tp.tour_id=t.tour_id and status =0) a ,
  (select tour_leg_id,departure, arrival , t.tour_id as tour_id, leg_number from tour_legs tl INNER JOIN  tours t on t.tour_id=tl.tour_id)    b
where gva.gvauser_id=a.gvauser_id
and b.tour_id=a.tour_id
and b.leg_number=a.leg_id';
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo TOURS_VALIDATION; ?></div>
			<!-- Table -->
			<table class="table table-hover">
				<?php
					echo "<tr><th>" . VALIDATE_CALLSIGN . " </th><th>" . VALIDATE_DEPARTURE . "</th><th>" . VALIDATE_ARRIVAL . "</th><th>" . VALIDATE_DATE . "</th><th>" . TOURS_NAME . "</th><th>" . TOURS_LEG . "</th><th>" . VALIDATE_ACTION . "</th></tr>";
					while ($row = $result->fetch_assoc()) {
						echo "<tr><td>";
						echo '<a href="./index_vam_op.php?page=pilot_details&pilot_id=' . $row["gvauser_id"] . '">' . $row["callsign"] . '</a></td><td>';
						echo $row["departure"] . '</td><td>';
						echo $row["arrival"] . '</td><td>';
						echo $row["report_date"] . '</td><td>';
						echo $row["tour_name"] . '</td><td>';
						echo $row["leg_id"] . '</td><td>';
						echo '<a href="./index_vam_op.php?page=acept_tourleg&tour_pilot_id=' . $row["tour_pilot_id"]. '"><IMG src="images/OK32.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a>
				<a href="./index_vam_op.php?page=reject_tourleg&tour_pilot_id=' . $row["tour_pilot_id"] . '"><IMG src="images/KO32.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
					}
				?>

			</table>
		</div>
	</div>
	<div class="clearfix visible-lg"></div>
</div>
