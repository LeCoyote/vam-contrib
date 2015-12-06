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
	//require('check_admin_rights.php');
	if ($_SESSION["access_jump_validator"] == '1')
	{
		$db = new mysqli($db_host , $db_username , $db_password , $db_database);
		$db->set_charset("utf8");


		if ($db->connect_errno > 0) {
			die('Unable to connect to database [' . $db->connect_error . ']');
		}

		$sql = "select * from jumps where paid=0";

		if (!$result = $db->query($sql)) {
			die('There was an error running the query [' . $db->error . ']');
		}
	?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading"><?php echo VALIDATE_JUMPS; ?></div>

				<!-- Table -->
				<table class="table table-hover">
					<?php
						echo "<tr><th>" . VALIDATE_JUMP_CALLSIGN . " </th><th>" . VALIDATE_JUMP_DEPARTURE . "</th><th>" . VALIDATE_JUMP_ARRIVAL . "</th><th>" . VALIDATE_JUMP_DATE . "</th><th>" . VALIDATE_JUMP_JUMP1 . "</th><th>" . VALIDATE_JUMP_JUMP2 . "</th><th>" . VALIDATE_JUMP_JUMP3 . "</th></tr>";
						while ($row = $result->fetch_assoc()) {
							echo "<td>";
							echo '<a href="./index_vam_op.php?page=pilot_details&pilot_id=' . $row["gvauser_id"] . '">' . $row["callsign"] . '</a></td><td>';
							echo $row["from_airport"] . '</td><td>';
							echo $row["to_airport"] . '</td><td>';
							echo $row["date"] . '</td><td>';
							echo '<a href="./index_vam_op.php?page=accept_jump&jump=' . $row["id"] . '&from_airport=' . $row["from_airport"] . '&to_airport=' . $row["to_airport"] . '&pilot=' . $row["gvauser_id"] . '&type=national"><IMG src="images/Edit-Validated-48.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td><td>';
							echo '<a href="./index_vam_op.php?page=accept_jump&jump=' . $row["id"] . '&from_airport=' . $row["from_airport"] . '&to_airport=' . $row["to_airport"] . '&pilot=' . $row["gvauser_id"] . '&type=continental"><IMG src="images/Edit-Validated-48.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td><td>';
							echo '<a href="./index_vam_op.php?page=accept_jump&jump=' . $row["id"] . '&from_airport=' . $row["from_airport"] . '&to_airport=' . $row["to_airport"] . '&pilot=' . $row["gvauser_id"] . '&type=intercontinental"><IMG src="images/Edit-Validated-48.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
						}
						$db->close();
		}
		else
		{
			echo '<div class="alert alert-danger"> You do not have access to Jump validator</div>';
		}
				?>
			</table>
		</div>
	</div>

	<div class="clearfix visible-lg"></div>
</div>
