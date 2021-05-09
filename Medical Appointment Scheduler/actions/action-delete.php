<?php
require_once('../controller/crudFunctions.php');
$crudObj = new CrudOparation;


// Delete appointments
if (isset($_POST["appointment_id"])) {

    $rowNoToDelete = $_POST["appointment_id"];

    $where = array("appointment_id" => $rowNoToDelete);
    $crudObj->delete_record("appointment", $where);


}

?>