<?php include('includes/header.php'); ?>
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="card">
                <div class="auth-form-wrapper px-4 py-5">
                    <div class="signin-heading text-center">
                        <h2>Registration</h2>
                    </div>
                    <form class="forms-sample mt-4" method="post" action="physician-registration.php">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Physician ID</label>
                            <input type="text" name="physician_id" class="form-control" placeholder="Enter Physican Id"
                                   id="exampleInputEmail1">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Frist Name</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1"
                                           placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="Number" name="phone_number" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="user_pass" class="form-control" id="exampleInputPassword1"
                                   autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="signUp" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                Registration
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">Already Register? <a href="physician-login.php">Login Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>

<?php

if (isset($_POST['signUp'])) {

    $physician_id = $_POST['physician_id'];
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $user_pass = $_POST['user_pass'];
    $phone_number = $_POST['phone_number'];
    $user_pass = md5($user_pass);
    $user_type = "physicain";

    $where = array("physician_id" => $physician_id);

    $check_user = $crudObj->existence($where, "physician");


    if ($check_user[0] >= 1) {

        echo '<script> Swal.fire("Invalid Physician ID", "Physician ID already exist! Please try again with Unique Physician ID.", "warning").then((result) => {

			if (result.value) {
				window.location.href = "patient-registration.php"; }
				else{
					window.location.href = "patient-registration.php";  
				} ; 
				});


				</script>';

    } else {

        $data_physician = array("physician_id" => $physician_id, "first_name" => $f_name,
            "last_name" => $l_name,
            "password" => $user_pass,
            "phone_number" => $phone_number);

        $physician_insert = $crudObj->insert("physician", $data_physician);
        print_r($data_physician);

        echo '<script> Swal.fire("Registered", "Your account has been successfully created", "success").then((result) => {

					if (result.value) {
							window.location.href = "physician-login.php";  }
						else{
							window.location.href = "physician-login.php";  
						} ; 
						});
	
</script>';
    }
}
?>