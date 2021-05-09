<?php
session_start();
require_once('../controller/crudFunctions.php');
$crudObj = new CrudOparation;

if (isset($_POST['do_login'])) {

    $user_id = $_POST['user_id'];

    $pass = $_POST['user_pass'];


    $where = array("nurse_id" => $user_id);


    $user_exist = $crudObj->existence($where, "nurse");

    if ($user_exist[0] > 0) {

        $userdetails = $crudObj->select_record("*", $where, "nurse");
        $get_user_Id = $userdetails[0]["nurse_id"];
        $password = $userdetails[0]["password"];
        $f_name = $userdetails[0]["first_name"];
        $l_name = $userdetails[0]["last_name"];
        $encrypte_pass = md5($pass);

        if ($password == $encrypte_pass) {
            $_SESSION['user_id'] = $get_user_Id;
            $_SESSION['first_name'] = $f_name;
            $_SESSION['last_name'] = $l_name;
            $_SESSION['user_type'] = "nurse";

            $response = array(true);
            echo json_encode($response);

        } else {
            $response = array(false);
            echo json_encode($response);
        }


    } else {
        $response = array('fail');
        echo json_encode($response);
    }
}
?>
