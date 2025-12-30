<?php
session_start();

$_SESSION['role'] = 'user';

$user_role = isset($_SESSION['role']) ? strtolower($_SESSION['role']) : 'guest';

$requested_type = isset($_GET['type']) ? strtolower($_GET['type']) : 'user';

$allowed_access = false;
$report_content = "";


if ($requested_type == 'user') {
    if ($user_role == 'user' || $user_role == 'admin') {
        $allowed_access = true;
        $report_content = "Welcome User";
    }
} elseif ($requested_type == 'admin') {
    
    if ($user_role == 'admin') {
        $allowed_access = true;
        $report_content = "Welcome Admin.";
    } else {
        $allowed_access = false;
        $report_content = "Your role (" . htmlspecialchars($user_role) . ") does not permit viewing the '" . htmlspecialchars($requested_type) . "' report.";
    }
} else {
    $report_content = "Report type not specified or invalid.";
}

?>