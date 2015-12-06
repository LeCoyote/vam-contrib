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

	$sql ="select DATEDIFF (t.end_date,CURDATE()) as diff_days,COALESCE(t3.accepted,0) as accepted,t.tour_id, t.tour_name, t.start_date, t.end_date, COALESCE(t1.tour_lenght,0)  as tour_len, t2.num_leg as legs from tours t left outer JOIN
  (select t.tour_id,count(leg_id) as tour_lenght from tour_pilots t inner join tours tl on t.tour_id = tl.tour_id where gvauser_id= $id GROUP BY tour_id) t1 on t.tour_id = t1.tour_id
  left outer JOIN (select t.tour_id,count(tour_leg_id) as num_leg from tours t inner join tour_legs tl on t.tour_id = tl.tour_id GROUP BY tour_id) t2 on t.tour_id = t2.tour_id left outer JOIN (select t.tour_id,count(leg_id) as accepted from tour_pilots t inner join tours tl on t.tour_id = tl.tour_id where gvauser_id= $id and t.status= 1 ) t3 on t3.tour_id = t.tour_id";



	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>
<!-- ACTIVE TOUR -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo TOURS_ACTIVE; ?></div>
			<div class="table-responsive">
			<!-- Table -->
			<table class="table table-hover">
				<?php
					echo "<tr><th>" . TOURS_NAME . "</th><th>" . TOURS_START_DATE . "</th><th>" . TOURS_END_DATE . "</th><th>" . TOURS_NUM_LEGS . "</th><th>" . TOURS_NUM_LEGS_REPORTED . "</th><th>" . TOURS_NUM_LEGS_ACCEPTED . "</th><th>" . INFO_PLANE . "</th></tr>";
					while ($row = $result->fetch_assoc()) {
						if ($row["diff_days"]>=0) {
							echo "<td>";
							echo $row["tour_name"] . '</td><td>';
							echo $row["start_date"] . '</td><td>';
							echo $row["end_date"] . '</td><td>';
							echo $row["legs"] . '</td><td>';
							echo $row["tour_len"] . '</td><td>';
							echo $row["accepted"] . '</td><td>';
							echo '<a href="./index_vam_op.php?page=tour_detail_pilot&tour_id=' . $row["tour_id"] . '&pilot_id=' . $id . '"><IMG src="./images/info.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
						}
					}

				?>
			</table>
			</div>
		</div>
	</div>

	<div class="clearfix visible-lg"></div>
</div>

<?php
	$sql ="select DATEDIFF (t.end_date,CURDATE()) as diff_days,COALESCE(t3.accepted,0) as accepted,t.tour_id, t.tour_name, t.start_date, t.end_date, COALESCE(t1.tour_lenght,0)  as tour_len, t2.num_leg as legs from tours t left outer JOIN
  (select t.tour_id,count(leg_id) as tour_lenght from tour_pilots t inner join tours tl on t.tour_id = tl.tour_id where gvauser_id= $id GROUP BY tour_id) t1 on t.tour_id = t1.tour_id
  left outer JOIN (select t.tour_id,count(tour_leg_id) as num_leg from tours t inner join tour_legs tl on t.tour_id = tl.tour_id GROUP BY tour_id) t2 on t.tour_id = t2.tour_id left outer JOIN (select t.tour_id,count(leg_id) as accepted from tour_pilots t inner join tours tl on t.tour_id = tl.tour_id where gvauser_id= $id and t.status= 1 ) t3 on t3.tour_id = t.tour_id";

	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
	}
?>

<!-- PAST TOUR -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo TOURS_INACTIVE; ?></div>
			<div class="table-responsive">
				<!-- Table -->
				<table class="table table-hover">
					<?php
						echo "<tr><th>" . TOURS_NAME . "</th><th>" . TOURS_START_DATE . "</th><th>" . TOURS_END_DATE . "</th><th>" . TOURS_NUM_LEGS . "</th><th>" . TOURS_NUM_LEGS_REPORTED . "</th><th>" . TOURS_NUM_LEGS_ACCEPTED . "</th><th>" . INFO_PLANE . "</th></tr>";
						while ($row = $result->fetch_assoc()) {
						if ($row["diff_days"]<0) {
							echo "<td>";
							echo $row["tour_name"] . '</td><td>';
							echo $row["start_date"] . '</td><td>';
							echo $row["end_date"] . '</td><td>';
							echo $row["legs"] . '</td><td>';
							echo $row["tour_len"] . '</td><td>';
							echo $row["accepted"] . '</td><td>';
							echo '<a href="./index_vam_op.php?page=tour_detail_pilot&tour_id=' . $row["tour_id"] . '&pilot_id=' . $id . '"><IMG src="./images/info.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
						}
						}
						$db->close();
					?>
				</table>
			</div>
		</div>
	</div>

	<div class="clearfix visible-lg"></div>
</div>

