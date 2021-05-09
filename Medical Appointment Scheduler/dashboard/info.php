<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>

<?php

$f_name = "";
$l_name = "";
$phone = "";
$title = "";
if (isset($_GET['nurse_id'])) {
    $nurse_id = $_GET['nurse_id'];
    $where_phy_name = array("physician_id" => $appointment['physician_id']);
    $where_nurse_id = array("nurse_id" => $nurse_id);
    $get_physician_name = $crudObj->select_record("first_name,last_name,phone_number", $where_nurse_id, "nurse");
    $f_name = $get_physician_name[0]['first_name'];
    $l_name = $get_physician_name[0]['last_name'];
    $phone = $get_physician_name[0]['phone_number'];
    $title = "Nurse";
} else if (isset($_GET['physician_id'])) {
    $physician_id = $_GET['physician_id'];
    $where_phy_name = array("physician_id" => $physician_id);
    $get_physician_name = $crudObj->select_record("first_name,last_name,phone_number", $where_phy_name, "physician");
    $f_name = $get_physician_name[0]['first_name'];
    $l_name = $get_physician_name[0]['last_name'];
    $phone = $get_physician_name[0]['phone_number'];
    $title = "Physician";
} else if (isset($_GET['patient_id'])) {
    $patient_id = $_GET['patient_id'];
    $where_patient_name = array("user_id" => $patient_id);
    $get_physician_name = $crudObj->select_record("first_name,last_name,address,sex,date_of_birth", $where_patient_name, "patient");
    $f_name = $get_physician_name[0]['first_name'];
    $l_name = $get_physician_name[0]['last_name'];
    $address = $get_physician_name[0]['address'];
    $sex = $get_physician_name[0]['sex'];
    $date_of_birth = $get_physician_name[0]['date_of_birth'];
    $title = "Patient";

} else {
    echo '<script>window.location.href = "index.php";</script>';
    exit;
}
?>
    <div class="page-content">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="card">
                <div class="auth-form-wrapper px-4 py-5">
                    <div class="signin-heading text-center">
                        <h2><?php echo $title; ?> Information</h2>
                    </div>
                    <form class="forms-sample mt-4">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" value="<?php echo $f_name; ?>"
                                           id="exampleInputEmail1" placeholder="First Name" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" value="<?php echo $l_name; ?>"
                                           id="exampleInputEmail1" placeholder="Last Name" readonly>
                                </div>
                            </div>
                        </div>
                        <?php if ($title != "Patient") { ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="Number" value="<?php echo $phone; ?>" class="form-control"
                                       id="exampleInputEmail1" readonly>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['patient_id'])) { ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth</label>
                                <input type="text" value="<?php echo $date_of_birth; ?>" class="form-control"
                                       id="exampleInputEmail1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <input type="text" value="<?php echo $sex; ?>" class="form-control"
                                       id="exampleInputEmail1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" value="<?php echo $address; ?>" class="form-control"
                                       id="exampleInputEmail1" readonly>
                            </div>
                        <?php } ?>
                        <div class="mt-3">
                            <a href="index.php" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php include('includes/footer.php'); ?>