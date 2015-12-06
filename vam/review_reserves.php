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
	include('db_login.php');
	$reserves = array();
	$db = new mysqli($db_host, $db_username, $db_password, $db_database);
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$sql = "select id,DATE_FORMAT(date,'%Y%m%d') as reserve_date ,DATE_FORMAT(now(),'%Y%m%d') as currdat ,route_id, gvauser_id, fleet_id  from reserves";
	if (!$result = $db->query($sql)) {
		die('There was an error running the query  [' . $db->error . ']');
	}
	while ($row = $result->fetch_assoc()) {
		$plane = $row["fleet_id"];
		$pilot = $row["gvauser_id"];
		$reserve_date = $row["reserve_date"];
		$currdat = $row["currdat"];
		$diffdays=intval ($reserve_date)- intval ($currdat);
		if (intval($diffdays)<0)
		{
			$sql1  = "update gvausers set route_id= NULL, book_date= NULL where gvauser_id=$pilot";
			if (!$result1 = $db->query($sql1)) {
				die('There was an error running the query  [' . $db->error . ']');
			}
			$sql1 = "update fleets set gvauser_id=NULL, booked=0 , booked_at=null where fleet_id= $plane";
			if (!$result1 = $db->query($sql1)) {
				die('There was an error running the query [' . $db->error . ']');
			}
			array_push($reserves, $row["id"]);
		}
	}

	foreach ($reserves as $reserve_id) {
		$sql = "delete  from reserves where id=$reserve_id";
		if (!$result = $db->query($sql)) {
			die('There was an error running the query  [' . $db->error . ']');
		}
	}	
	// Clean not used aircraft for charter
	$sql = "update fleets set gvauser_id=NULL , booked=0 , booked_at=null where booked=1 and HOUR(timediff(now(),booked_at))>=24";
	if (!$result = $db->query($sql)) {
		die('There was an error running the query  [' . $db->error . ']');
	}
	
?>

