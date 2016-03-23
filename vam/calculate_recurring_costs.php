<?php

/**
 * @Project: Virtual Airlines Manager (VAM)
 * @Author: Romain Riviere
 * @Web http://virtualairlinesmanager.net
 * VAM is licenced under the following license:
 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
 */

include('db_login.php');
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
$db->set_charset("utf8");
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}

if (empty($argv[1])) {
    die("This script expects an argument: daily, weekly, monthly or yearly.\n");
}

function calculate_recurring_cost($interval, $db) {
    $interval = strtolower($interval);
    $recur = array('daily' => 1, 'weekly' => 2, 'monthly' => 3, 'yearly' => 4);
    if (!isset($recur[$interval])) {
        die("Interval $interval not recognized.\n");
    }
    $recurrence = $recur[$interval];

    $sql_costs = 'SELECT financial_parameters.* FROM financial_parameters WHERE is_recurring = ' . $recurrence
            . ' AND (valid_until >= CURDATE() OR valid_until IS NULL)';

    if (!$result_costs = $db->query($sql_costs)) {
        die('There was an error running the query [' . $db->error . ']');
    }

    while ($row_cost = $result_costs->fetch_assoc()) {
        $sql = "INSERT INTO va_finances (parameter_id, finance_date, amount, gvauser_id, description, report_type, report_id) "
                . " VALUES (" . $row_cost['id'] . ", NOW(), -" . $row_cost['amount'] . ", 0, '" . $row_cost['financial_parameter'] . "', 'RECURRING',"
                . " '" . date('Ymd') . $interval . "')";
        if (!$result = $db->query($sql)) {
            die('There was an error running the query [' . $db->error . ']');
        }
    }
}

calculate_recurring_cost($argv[1], $db);
?>
