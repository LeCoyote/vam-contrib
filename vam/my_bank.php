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
	$sql = " select * from bank where gvauser_id=$id order by date desc ";

	if (!$result = $db->query($sql)) {
		die('There was an error running the query  [' . $db->error . ']');
	}
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo FINANCIAL_TRANSACTIONS; ?></div>

			<!-- Table -->
			<table class="table table-hover">
				<?php
					$total_money = 0;
					echo '<tr><th>' . BANK_DATE . '</th><th>' . BANK_AMOUNT . '</th><th>' . BANK_REASON . '</th></tr>';
					while ($row = $result->fetch_assoc()) {
						echo '<tr><td>';
						echo $row["date"] . '</td><td>';
						echo number_format($row["quantity"] , 2) . '</td><td>';
						echo $row["jump"] . '</td></tr>';
						$total_money = $total_money + $row["quantity"];
					}
					echo "</table></br>";
					$total_money = number_format($total_money , 2);
					echo "<h3>" . BANK_TOTAL_MONEY . $total_money . ' ' . $currency . "</h3>";
					$db->close();
				?>
				<table>
		</div>
	</div>
</div>
