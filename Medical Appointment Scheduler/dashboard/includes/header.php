<?php session_start();
require_once('../controller/crudFunctions.php');
$crudObj = new CrudOparation;
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $f_name = $_SESSION['first_name'];
    $l_type = $_SESSION['last_name'];
    $user_type = $_SESSION['user_type'];
    $full_name = $f_name . " " . $l_type;

} else {
    echo '<script>window.location.href = "../index.php";</script>';
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical Appointment Scheduler</title>
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <!-- Data table -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>
<body>
<div class="main-wrapper">
    <div class="main-wrapper">