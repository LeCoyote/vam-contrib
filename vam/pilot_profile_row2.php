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

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo PILOT_FLIGTHS; ?></h3>
			</div>
			<div class="panel-body">
				<?php
					$db = new mysqli($db_host , $db_username , $db_password , $db_database);
					$db->set_charset("utf8");
					if ($db->connect_errno > 0) {
						die('Unable to connect to database [' . $db->connect_error . ']');
					}
					$sql = "select pirep_id as id,comment,valid as status,pirep_id as flight,from_airport departure, to_airport arrival ,date,distance,duration,charter, 'pirep' as type ,flight as flight_regular
          from pireps where gvauser_id=$id
          UNION
select pirepfsfk_id as id,'' as comment,validated as status,pirepfsfk_id as flight, SUBSTRING(OriginAirport,1,4) departure, SUBSTRING(DestinationAirport,1,4) arrival , CreatedOn as date, DistanceFlight as distance, FlightTime as duration, charter , 'keeper' as type , flight as flight_regular
          from pirepfsfk where gvauser_id=$id
          UNION
SELECT report_id as id,'' as comment , validated as status, report_id as flight , origin_id as departure, destination_id as arrival, date, distance, (HOUR(duration)*60 + minute(duration))/60 as duration, charter, 'Fsacars' as type, flight as flight_regular
          from reports where pilot_id=$id
		  UNION
select pirep_id as id,comment,valid as status,pirep_id as flight,from_airport departure, to_airport arrival ,date,distance,duration,charter, 'pirep' as type ,flight as flight_regular
          from pireps where gvauser_id=$id
          UNION
SELECT flightid as id,'' as comment , validated as status, flightid as flight, departure, arrival , flight_date as date, distance, flight_duration as duration, charter, 'VAMACARS' as type, flight as flight_regular
		  from vampireps where gvauser_id=$id
		  order by date desc, id desc";
					//echo $sql;
					if (!$result = $db->query($sql)) {
						die('There was an error running the query  [' . $db->error . ']');
					}
				?>
				<table class="table table-hover">
					<?php
						echo "<tr><th>" . PILOT_FLIGTHS_DATE . "</th><th>" . PILOT_FLIGTHS_DEP . "</th><th>" . PILOT_FLIGTHS_ARR . "</th><th>" . PILOT_FLIGTHS_DUR . "</th><th>" . PILOT_FLIGTHS_DIST . "</th><th>" . PILOT_FLIGTHS_TYPE . "</th><th>" . PILOT_FLIGTHS_VALI . "</th><th>" . PILOT_FLIGTHS_DETAILS . "</th></tr>";
						while ($row = $result->fetch_assoc()) {
							$flight_type = '';
							if ($row["type"] == 'pirep') {
								$flight_type = INDEX_PILOT_MANUAL;
							} elseif ($row["type"] == 'keeper') {
								$flight_type = INDEX_PILOT_KEEPER;
							} elseif ($row["type"] == 'Fsacars') {
								$flight_type = INDEX_PILOT_FSACARS;
							}
							elseif ($row["type"] == 'VAMACARS') {
								$flight_type = 'VAM ACARS';
							}
							echo '<td><i class="fa fa-calendar"></i>&nbsp;';
							echo $row["date"] . '</td><td><i class="fa fa-arrow-circle-up"></i>&nbsp;';
							echo $row["departure"] . '</td><td><i class="fa fa-arrow-circle-down"></i>&nbsp;';
							echo $row["arrival"] . '</td><td><i class="fa fa-clock-o"></i>&nbsp;';
							echo number_format($row["duration"] , 2) . '</td><td><i class="fa fa-expand"></i>&nbsp;';
							echo number_format($row["distance"] , 0) . '</td><td><i class="fa fa-tags"></i>&nbsp;';
							if ($row["status"] == 0)
								$status_image = 'pause32.png';
							else if ($row["status"] == 1)
								$status_image = 'accepted.png';
							else
								$status_image = 'rejected.png';
							if ($row["charter"] == 1) {
								echo INDEX_PILOT_CHARTER . ' -' . $flight_type . '</td><td>';
							} else {
								echo INDEX_PILOT_REGULAR . ' - ' . $flight_type . ' - ' . $row["flight_regular"] . '</td><td>';
							}
							echo '<IMG src="images/' . $status_image . '" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></td><td>';
							if ($row["type"] == 'pirep') {

								echo '<a href="./index_vam_op.php?page=manual_flight_details&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';

							} elseif ($row["type"] == 'keeper') {
								echo '<a href="./index_vam_op.php?page=PIREPDetails&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
							} elseif ($row["type"] == 'Fsacars') {
								echo '<a href="./index_vam_op.php?page=FSACARSDetails&ID=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
							}
							elseif ($row["type"] == 'VAMACARS') {
								echo '<a href="./index_vam_op.php?page=flight_details&flight_id=' . $row["id"] . '"><IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT=""></a></td></tr>';
							}
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
