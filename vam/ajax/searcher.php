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
	session_start();
	include('../db_login.php');
	if (isset ($_GET['lang']))
	{
		$_SESSION['language'] = $_GET['lang'];
	}
	if (!isset($_GET['lang']) && $_SESSION['language'] == '') {
	//if (!isset($_GET['lang'])) {
		$_SESSION['language'] = "en";
	}
	if (isset($_GET['lang'])) {
		$_SESSION['language'] = $_GET['lang'];
	} elseif (!isset($_SESSION['language'])) {
		$_SESSION['languages'] = "en";
	}
	include('../classes/class_vam_mailer.php');
	include('../classes/security.php');

	include("../languages/lang_" . $_SESSION['language'] . ".php");	
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	
	$data='';
	if(isset($_POST['search_dep']))
	{
		$str_dep = $_POST['search_dep'];
		$str_dep = preg_replace("#[^0-9a-z]#i","",$str_dep);
		$str_dep = strtolower ($str_dep);

		$str_arr = $_POST['search_arr'];
		$str_arr = preg_replace("#[^0-9a-z]#i","",$str_arr);
		$str_arr = strtolower ($str_arr);



		$data='<div class="table-responsive" style="height:400px;overflow:auto"><table class="table table-hover">';
				
					$data = $data. '<tr><th>' . FLIGHT_VA . '</th><th>' . DEPARTURE . '</th><th>' . ARRIVAL . '</th><th>' . BOOK_ROUTE_DURATION . '</th><th>' . ROUTE_PLANE . '</th></tr>';
					$sql2 = "select * from routes where lower(departure) LIKE '$str_dep%' and lower(arrival) LIKE '$str_arr%'  order by departure asc,arrival asc ";
					
					if (!$result2 = $db->query($sql2)) {
						die('There was an error running the query [' . $db->error . ']');
					}
					while ($row = $result2->fetch_assoc()) {

						$sql3 = 'select ft.plane_icao from fleettypes_routes fr, routes r, fleettypes ft where r.route_id=' . $row["route_id"] . ' and r.route_id=fr.route_id and fr.fleettype_id=ft.fleettype_id ';
						$planes_icaos = '';
						if (!$result3 = $db->query($sql3)) {
							die('There was an error running the query [' . $db->error . ']');
						}
						while ($row3 = $result3->fetch_assoc()) {
							$planes_icaos = $planes_icaos . ' ' . $row3["plane_icao"];
						}
							
						
						$data = $data. '<tr><td><i class="fa fa-bookmark"></i>&nbsp;';
						$data = $data. $row["flight"] . '</td><td><i class="fa fa-arrow-circle-up"></i>&nbsp;';
						$data = $data. '<a href="./index.php?page=airport_info&airport=' . $row["departure"] . '">' . $row["departure"] . '</a></td><td><i class="fa fa-arrow-circle-down"></i>&nbsp;';
						$data = $data. '<a href="./index.php?page=airport_info&airport=' . $row["arrival"] . '">' . $row["arrival"] . '</a> </td><td><i class="fa fa-clock-o"></i>&nbsp;';
						$data = $data. $row["duration"] . '</td><td><i class="fa fa-plane"></i>&nbsp;';
						$data = $data. $planes_icaos . '</td></tr></tr>';
					}

					
					$db->close();
					$data = $data.'</table></div>';
					echo $data;
					
				
			
	}
	

?>
