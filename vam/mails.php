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
	/* Connect to Database */
	$db = new mysqli($db_host , $db_username , $db_password , $db_database);
	$db->set_charset("utf8");
	if ($db->connect_errno > 0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	// Execute SQL query
	$sql = 'select * from messages m, gvausers u where u.gvauser_id= m.user_from and m.status<>3 and  m.user_to=' . $id . ' order by sentdate desc;';
	if (!$result = $db->query($sql)) {
		die('There was an error running the query  [' . $db->error . ']');
	}
?>
<div class="row">
	<div class="col-md-12">
		<a href="./index_vam_op.php?page=message_create"><IMG src="images/Email-Add-32.png" BORDER=0
		                                                      ALT=""></a><?php echo MAILS_NEW_MESSAGE_LNK; ?><p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo MAILS; ?></div>
			<div class="table-responsive">
			<!-- Table -->
			<table class="table table-hover">
				<?php
					echo '<tr><th>' . MAILS_DATE . '</th><th>' . MAILS_FROM . '</th><th>' . MAILS_SUBJECT . '</th><th>' . MAILS_ACTIONS . '</th></tr>';
					while ($row = $result->fetch_assoc()) {
						echo '<tr><td>';
						echo $row["sentdate"] . '</td><td>';
						echo $row["callsign"] . '-' . $row["name"] . ' ' . $row["surname"] . '</td><td>';
						echo $row["subject"] . '</td><td>';
						echo '<a href="./index_vam_op.php?page=message_read&mail=' . $row["message_id"] . '"><IMG src="images/Mail-Open-blue-48.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a>
                  <a href="./index_vam_op.php?page=message_delete&mail=' . $row["message_id"] . '"><IMG src="images/Email-Delete-32.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT=""></a></td></tr>';
					}
					echo "</table></br>";
					$db->close();
				?>
			<table>
			</div>
		</div>
	</div>
</div>
