<?php /**
 * @Project: Virtual Airlines Manager (VAM)
 * @Author: Alejandro Garcia * @Web http://virtualairlinesmanager.net
 * Copyright (c) 2013 - 2015 Alejandro Garcia
 * VAM is licenced under the following license:
 * Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
 * View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
 */
?>
<?php if (empty($_SESSION['id'])) {
	$sessionid = 'nosession';
} else {
	$sessionid = $_SESSION["id"]; }
	if (($pilot_public != 1) && ($sessionid == 'nosession')) 
	{
		require('check_login.php');
	} else {
		$pilotID = $_GET['pilot_id']; 
		include('get_pilotID_data.php'); 
	} 
?>
<div class="container">
<!-- HOME PAGE begin -->
<br>

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo PILOT_PROFILE; ?></h3></div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<td colspan="2">
							<?php if (strlen($other_pilot_image) <= 10) {
								$other_pilot_image = "./uploads/pilot_default.png";
							}
								echo '<img src=' . $other_pilot_image . ' width="100%" >'; ?> </td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_NAME; ?>
						</td>
						<td>
							<?php echo $pilotname . ' ' . $pilotsurname; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_CALLSIGN; ?>
						</td>
						<td>
							<?php echo $callsign; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_COUNTRY; ?>
						</td>

						<td><?php echo $country; ?>
							<?php echo '<img src="./images/country-flags/' . $country_flag . '.png" alt="' . $country_flag . '">' ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_CITY; ?>
						</td>
						<td>
							<?php echo $city; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_HUB; ?>
						</td>
						<td><?php echo $hub; ?>
						<?php echo '<img src="./images/country-flags/' . $hub_airport_flag . '.png" alt="' . $hub_airport_flag . '">' ?>
						<br>
						<?php echo '<font size="2">&nbsp;'.$hub_airport_name.'</font>'; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_LOCATION; ?>
						</td>
						<td><?php echo $location; ?>
							<?php echo '<img src="./images/country-flags/' . $location_airport_flag . '.png" alt="' . $location_airport_flag . '">' ?>
							<br>
							<?php echo '<font size="2">&nbsp;'.$location_airport_name.'</font>'; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_RANK; ?>
						</td>
						<td>
							<?php echo '<img src="'.$rank_url_image.'">&nbsp;' ?><?php echo $rank; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_SALARY; ?>
						</td>
						<td>
							<?php echo $salary_hour; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_MONEY; ?>
						</td>
						<td>
							<?php echo $money . ' ' . $currency;; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_REGISTERDATE; ?>
						</td>
						<td>
							<?php echo $register_date; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo PILOT_STATICS; ?></h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<td>
							<?php echo PILOT_FLIGHTS; ?>
						</td>
						<td>
							<?php echo $num_fsacars + $num_fskeeper + $num_pireps + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_HOURS; ?>
						</td>
						<td>
							<?php echo $gva_hours + $transfered_hours; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_DISTANCE; ?>
						</td>
						<td>
							<?php echo $dist_pireps + $dist_fskeeper + $dist_fsacars + $dist_vamacars - $dist_pireps_rejected - $dist_fskeeper_rejected - $dist_fsacars_rejected - $dist_vamacars_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_FLIGHTSREGULAR; ?>
						</td>
						<td>
							<?php echo $num_pireps_reg + $num_fskeeper_reg + $num_fsacars_reg + $num_vamacars_reg - $num_pireps_reg_rejected - $num_fskeeper_reg_rejected - $num_fsacars_reg_rejected - $num_vamacars_reg_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_FLIGHTSCHARTER; ?>
						</td>
						<td>
							<?php echo $num_pireps + $num_fskeeper + $num_fsacars + $num_vamacars - $num_pireps_reg - $num_fskeeper_reg - $num_fsacars_reg - $num_vamacars_reg; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_PERFLIGHTREGULAR; ?>
						</td>
						<td>
							<?php if (($num_pireps + $num_fskeeper + $num_fsacars + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected) < 1) {
								echo '0 %';
							} else {
								echo number_format((100 * ($num_pireps_reg + $num_fskeeper_reg + $num_fsacars_reg + $num_vamacars_reg - $num_pireps_reg_rejected - $num_fskeeper_reg_rejected - $num_fsacars_reg_rejected - $num_vamacars_reg_rejected)) / ($num_pireps + $num_fskeeper + $num_fsacars + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected) , 2) . ' %';
							}; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_MANUALREPORT; ?>
						</td>
						<td>
							<?php echo $num_pireps - $num_pireps_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_FSKEEPERREPORT; ?>
						</td>
						<td>
							<?php echo $num_fskeeper - $num_fskeeper_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_FSACARSREPORT; ?>
						</td>
						<td>
							<?php echo $num_fsacars - $num_fsacars_rejected; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo PILOT_VAMACARSREPORT; ?>
						</td>
						<td>
							<?php echo $num_vamacars - $num_vamacars_rejected; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo PILOT_CERTIFICATIONS; ?></h3></div>
			<div class="panel-body">
				<table class="table table-hover">
					<?php foreach ($planes_certificated as $x => $x_value) { ?>
						<tr>
							<td><i class="fa fa-plane">&nbsp;&nbsp;<?php echo $x_value; ?></td>
						</tr>                        <?php } ?>                
				</table>
			</div>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
</div>
<!-- Row 2 --><?php $medal_pilot = $pilotID;
	include('pilot_awards.php'); ?><!-- Row 3 --><?php $medal_pilot = $pilotID;
	include('pilot_tour_awards.php'); ?><!-- Row 4 -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><h3 class="panel-title"><?php echo PILOT_FLIGTHS; ?></h3></div>
			<div
				class="panel-body">                <?php $db = new mysqli($db_host , $db_username , $db_password , $db_database);
					$db->set_charset("utf8");
					if ($db->connect_errno > 0) {
						die('Unable to connect to database [' . $db->connect_error . ']');
					}
					$sql = "select pirep_id as id,comment,valid as status,pirep_id as flight,from_airport departure, to_airport arrival ,date,distance,duration,charter, 'pirep' as type ,flight as flight_regular          from pireps where gvauser_id=$id           UNION          select pirepfsfk_id as id,'' as comment,validated as status,pirepfsfk_id as flight, SUBSTRING(OriginAirport,1,4) departure, SUBSTRING(DestinationAirport,1,4) arrival , CreatedOn as date, DistanceFlight as distance, FlightTime as duration, charter , 'keeper' as type , flight as flight_regular          from pirepfsfk where gvauser_id=$id           UNION          SELECT report_id as id,'' as comment , validated as status, report_id as flight , origin_id as departure, destination_id as arrival, date, distance, (HOUR(duration)*60 + minute(duration))/60 as duration, charter, 'Fsacars' as type, flight as flight_regular          from reports where pilot_id=$id 		  UNION 		  SELECT flightid as id,'' as comment , validated as status, flightid as flight, departure, arrival , flight_date as date, distance, flight_duration as duration, charter, 'VAMACARS' as type, flight as flight_regular		  from vampireps where gvauser_id=$id 		  order by date desc, id desc";
					if (!$result = $db->query($sql)) {
						die('There was an error running the query  [' . $db->error . ']');
					} ?>
				<table 	class="table table-hover">                    
					<?php echo "<tr><th>" . PILOT_FLIGTHS_DATE . "</th><th>" . PILOT_FLIGTHS_DEP . "</th><th>" . PILOT_FLIGTHS_ARR . "</th><th>" . PILOT_FLIGTHS_DUR . "</th><th>" . PILOT_FLIGTHS_DIST . "</th><th>" . PILOT_FLIGTHS_TYPE . "</th><th>" . PILOT_FLIGTHS_VALI . "</th><th>" . PILOT_FLIGTHS_DETAILS . "</th></tr>";
						while ($row = $result->fetch_assoc()) {
							$flight_type = '';
							if ($row["type"] == 'pirep') {
								$flight_type = INDEX_PILOT_MANUAL;
							} elseif ($row["type"] == 'keeper') {
								$flight_type = INDEX_PILOT_KEEPER;
							} elseif ($row["type"] == 'Fsacars') {
								$flight_type = INDEX_PILOT_FSACARS;
							} elseif ($row["type"] == 'VAMACARS') {
								$flight_type = 'VAM ACARS';
							}
							echo '<td><i class="fa fa-calendar"></i>&nbsp;';
							echo $row["date"] . '</td>
                            <td><i class="fa fa-arrow-circle-up"></i>&nbsp;';
							echo $row["departure"] . '</td>
                            <td><i class="fa fa-arrow-circle-down"></i>&nbsp;';
							echo $row["arrival"] . '</td>
                            <td><i class="fa fa-clock-o"></i>&nbsp;';
							echo number_format($row["duration"] , 2) . '</td>
                            <td><i class="fa fa-expand"></i>&nbsp;';
							echo number_format($row["distance"] , 0) . '</td>
                            <td><i class="fa fa-tags"></i>&nbsp;';
							if ($row["status"] == 0) $status_image = 'pause32.png'; else if ($row["status"] == 1) $status_image = 'accepted.png'; else $status_image = 'rejected.png';
							if ($row["charter"] == 1) {
								echo INDEX_PILOT_CHARTER . ' -' . $flight_type . '</td>
                            <td>';
							} else {
								echo INDEX_PILOT_REGULAR . ' - ' . $flight_type . ' - ' . $row["flight_regular"] . '</td>
                            <td>';
							}
							echo '
                                <IMG src="images/' . $status_image . '" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                            </td>
                            <td>';
							if ($row["type"] == 'pirep') {
								if ($sessionid == 'nosession') {
									echo '
                                <a href="./index.php?page=manual_pirep_details&ID=' . $row["id"] . '">
                                    <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                                </a>
                            </td>
                        </tr>';
								} else {
									echo '
                        <a href="./index_vam_op.php?page=manual_pirep_details&ID=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								}
							} elseif ($row["type"] == 'keeper') {
								if ($sessionid == 'nosession') {
									echo '
                        <a href="./index.php?page=PIREPDetails&ID=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								} else {
									echo '
                        <a href="./index_vam_op.php?page=PIREPDetails&ID=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								}
							} elseif ($row["type"] == 'Fsacars') {
								if ($sessionid == 'nosession') {
									echo '
                        <a href="./index.php?page=FSACARSDetails&ID=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								} else {
									echo '
                        <a href="./index_vam_op.php?page=FSACARSDetails&ID=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								}
							} elseif ($row["type"] == 'VAMACARS') {
								if ($sessionid == 'nosession') {
									echo '
                        <a href="./index.php?page=flight_details&flight_id=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								} else {
									echo '
                        <a href="./index_vam_op.php?page=flight_details&flight_id=' . $row["id"] . '">
                            <IMG src="images/info.png" WIDTH="25" HEIGHT="25" BORDER=0 ALT="">
                        </a>
                        </td>
                        </tr>';
								}
							}
						}
						$db->close(); ?> </table>
			</div>
		</div>
	</div>
</div>
<!-- Row 5 -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo PILOT_FLIGTH_MAP; ?></h3></div>
			<div class="panel-body">
				<?php include 'pilot_flights_map.php'; ?> </div>
		</div>
	</div>
</div>
</div>
