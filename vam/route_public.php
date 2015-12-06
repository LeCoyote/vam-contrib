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

	include('va_parameters.php');

	$db = new mysqli($db_host , $db_username , $db_password , $db_database);

	$db->set_charset("utf8");



	if ($db->connect_errno > 0) {

		die('Unable to connect to database [' . $db->connect_error . ']');

	}





	$sql = " select * from routes order by departure asc,arrival asc ";



	if (!$result = $db->query($sql)) {

		die('There was an error running the query [' . $db->error . ']');

	}

?>





<div class="row">

	<div class="col-md-12">

		<div class="panel panel-default">

			<!-- Default panel contents -->

			<div class="panel-heading"><?php echo ROUTES_VA_SEARCHER  ?></div>

				<form class="form-horizontal" id="manual-pirep-form" action="./index_vam_op.php?page=pirep_manual_pre_insert" role="form" method="post">

					<br>

					<div class="form-group">

						<label class="control-label col-sm-2" for="departure"><?php echo MANUAL_PIREP_DEP; ?></label>



						<div class="col-sm-3">

							<input type="text" class="form-control" maxlength="4" name="routedeparture" id="routedeparture"

							       placeholder="<?php echo MANUAL_PIREP_DEP_PH; ?>">

						</div>						

					</div>



					<div class="form-group">

						<label class="control-label col-sm-2" for="arrival"><?php echo MANUAL_PIREP_ARR; ?></label>



						<div class="col-sm-3">

							<input type="text" class="form-control" maxlength="4" name="routearrival" id="routearrival"

							       placeholder="<?php echo MANUAL_PIREP_ARR_PH; ?>">

						</div>

					</div>



				</form>

				

			

			</div>

		</div>

	</div>



	<div class="clearfix visible-lg"></div>

<div id="no_search_result">	

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

				<!-- Default panel contents -->

				<div class="panel-heading"><?php echo ROUTES_VA . ' ' . $va_name; ?></div>

				<div class="table-responsive">

				<!-- Table -->

				<div class="table-responsive" style="height:400px;overflow:auto">
				<table class="table table-hover">
					<?php

						echo '<tr><th>' . FLIGHT_VA . '</th><th>' . DEPARTURE . '</th><th>' . ARRIVAL . '</th><th>' . BOOK_ROUTE_DURATION . '</th><th>' . ROUTE_PLANE . '</th></tr>';

						while ($row = $result->fetch_assoc()) {

							$sql2 = 'select ft.plane_icao from fleettypes_routes fr, routes r, fleettypes ft where r.route_id=' . $row["route_id"] . ' and r.route_id=fr.route_id and fr.fleettype_id=ft.fleettype_id ';

							$planes_icaos = '';

							if (!$result2 = $db->query($sql2)) {

								die('There was an error running the query [' . $db->error . ']');

							}

							while ($row2 = $result2->fetch_assoc()) {

								$planes_icaos = $planes_icaos . ' ' . $row2["plane_icao"];

							}

							echo '<tr><td><i class="fa fa-bookmark"></i>&nbsp;';

							echo $row["flight"] . '</td><td><i class="fa fa-arrow-circle-up"></i>&nbsp;';

							echo '<a href="./index.php?page=airport_info&airport=' . $row["departure"] . '">' . $row["departure"] . '</a>  </td><td><i class="fa fa-arrow-circle-down"></i>&nbsp;';

							echo '<a href="./index.php?page=airport_info&airport=' . $row["arrival"] . '">' . $row["arrival"] . '</a>  </td><td><i class="fa fa-arrow-circle-down"></i>&nbsp;';

							echo $row["duration"] . '</td><td><i class="fa fa-plane"></i>&nbsp;';

							echo $planes_icaos . '</td></tr>';

						}

						$db->close();

					?>

				</table>

				</div>

			</div>

		</div>
	</div>


		<div class="clearfix visible-lg"></div>

	</div>

</div>



<div id="search_result">	

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

				<!-- Default panel contents -->

				<div class="panel-heading"><?php echo ROUTES_VA . ' ' . $va_name; ?></div>

				<div id="departureli" name="departureli" class="entry"></div>

			</div>

		</div>



		<div class="clearfix visible-lg"></div>

	</div>

</div>







