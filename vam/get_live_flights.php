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
	include ('db_login.php');
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$sql = "SELECT flight_id FROM `vam_live_flights` WHERE TIMESTAMPDIFF( MINUTE ,NOW( ) , last_update )<-3";
							
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
	while ($row = $result->fetch_assoc()) 
	{
		$sql_inner = "delete from vam_live_acars where flight_id='".$row["flight_id"]."'";
		
		if (!$result_acars = $db->query($sql_inner)) 
		{
		die('There was an error running the query [' . $db->error . ']');
		}
		$sql_inner = "delete from vam_live_flights where flight_id='".$row["flight_id"]."'";
		if (!$result_acars = $db->query($sql_inner)) 
		{
		die('There was an error running the query [' . $db->error . ']');
		}		
	}
$sql = 'select callsign, arrival, departure, flight_status, name, surname, plane_type, pending_nm, perc_completed from vam_live_flights vf, gvausers gu where gu.gvauser_id = vf.gvauser_id ';

if (!$result = $db->query($sql)) {
	die('There was an error running the query [' . $db->error . ']');
}
$data = array();
if ( mysqli_num_rows ( $result ) >0)
{
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
}	
echo json_encode( $data );
?>