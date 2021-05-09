<?php
require_once('../controller/crudFunctions.php');
$crudObj = new CrudOparation;


// Add appointments
if (isset($_POST["app_time"])) {

    $app_time = $_POST["app_time"];
    $app_date = $_POST["app_date"];
    $time = $app_date . " " . $app_time;
    $nurse_id = $_POST["nurse_id"];
    $patient_id = $_POST["patient_id"];
    $physician_id = $_POST["physician_id"];

    $data = array("nurse_id" => $nurse_id,
        "patient_id" => $patient_id,
        "physician_id" => $physician_id,
        "time" => $time
    );

    $date_insert = $crudObj->insert("appointment", $data);

    $response = array(true);
    echo json_encode($response);


} ?>