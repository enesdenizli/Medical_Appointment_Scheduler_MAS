<?php include('includes/header.php'); ?>

    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="card">
                <div class="auth-form-wrapper px-4 py-5">
                    <div class="signin-heading text-center">
                        <h2>Registration</h2>
                    </div>
                    <form class="forms-sample mt-4" method="post" action="patient-registration.php">
                        <div class="form-group">
                            <label for="exampleInputPassword1">User ID</label>
                            <input type="text" name="user_id" class="form-control" id="exampleInputPassword1"
                                   autocomplete="off" placeholder="Enter user id" required>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1"
                                           placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1"
                                           placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="user_pass" class="form-control" id="exampleInputPassword1"
                                   autocomplete="current-password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail1"
                                   required>
                        </div>

                        <div class="row">
                            <div class="col-auto mt-2">
                                <label for="exampleInputSex">Sex:</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="male"
                                                   value="male" required>
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="female"
                                                   value="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">SSN</label>
                            <input type="num" name="ssn" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-2">
                                <div class="insurance-text">
                                    <p>Do you have an insurance?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="insurance" id="yes"
                                                   value="yes" required>
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="insurance" id="no"
                                                   value="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="insurance-content">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Insurance Number</label>
                                <input type="text" class="form-control" name="ins_id" id="exampleInputEmail1"
                                       placeholder="Insurance Number">
                            </div>


                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" name="ins_first_name"
                                               id="exampleInputEmail1" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" name="ins_last_name"
                                               id="exampleInputEmail1" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Provider Name</label>
                                <input type="text" class="form-control" name="ins_provider_name" id="exampleInputEmail1"
                                       placeholder="Provider Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Patient's SSN</label>
                                <input type="num" class="form-control" name="patient_ssnm" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label>Insurance Coverage</label>
                                <select name="ins_coverage" class="form-control form-control-sm mb-3">
                                    <option selected>Open this select menu</option>
                                    <option value="HMO">HMO</option>
                                    <option value="PPO">PPO</option>
                                    <option value="EPO">EPO</option>
                                    <option value="POS">POS</option>
                                    <option value="HDHP">HDHP</option>
                                    <option value="HSA">HSA</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" name="signUp" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                Registration
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">Already Register? <a href="patient-login.php"> Login Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>

    <script>
        $(document).ready(function () {
            $('.insurance-content').hide();
            $('input[name="insurance"]').change(function () {
                var demovalue = $(this).val();
                if (demovalue == 'yes') {
                    $('.insurance-content').show();
                } else {
                    $('.insurance-content').hide();
                }
            });
        });
    </script>

<?php

if (isset($_POST['signUp'])) {

    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $user_pass = $_POST['user_pass'];
    $date_of_birth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $ssn = $_POST['ssn'];
    $user_pass = md5($user_pass);
    $user_type = "patient";
    $user_id = $_POST['user_id'];


    $where = array("user_id" => $user_id);

    $check_user = $crudObj->existence($where, "patient");

    print_r($check_user);

    if ($check_user[0] >= 1) {

        echo '<script> Swal.fire("Invalid User ID", "User ID already exist! Please try again with Unique User ID.", "warning").then((result) => {

			if (result.value) {
				window.location.href = "patient-registration.php"; }
				else{
					window.location.href = "patient-registration.php";  
				} ; 
				});


				</script>';


    } else {

        if ($_POST['insurance'] == "yes") {
            $insurance_id = $_POST['ins_id'];
            $ins_first_name = $_POST['ins_first_name'];
            $ins_last_name = $_POST['ins_last_name'];
            $ins_provider_name = $_POST['ins_provider_name'];
            $patient_ssnm = $_POST['patient_ssnm'];
            $ins_coverage = $_POST['ins_coverage'];

            $data_insurance = array("insurance_id" => $insurance_id,
                "insurance_provider" => $ins_provider_name,
                "pfirst_name" => $ins_first_name,
                "plast_name" => $ins_last_name,
                "patient_ssn" => $patient_ssnm,
                "coverage" => $ins_coverage);

            $insurance_insert = $crudObj->insert("insurance", $data_insurance);

            $data = array("user_id" => $user_id,
                "password" => $user_pass,
                "first_name" => $f_name,
                "last_name" => $l_name,
                "date_of_birth" => $date_of_birth,
                "sex" => $gender,
                "ssn" => $ssn,
                "address" => $address,
                "insurance_id" => $insurance_id);
            $patient_insert = $crudObj->insert("patient", $data);

        } else {

            $data = array("user_id" => $user_id,
                "password" => $user_pass,
                "first_name" => $f_name,
                "last_name" => $l_name,
                "date_of_birth" => $date_of_birth,
                "sex" => $gender,
                "ssn" => $ssn,
                "address" => $address);
            $patient_insert = $crudObj->insert("patient", $data);

        }

        echo '<script> Swal.fire("Registered", "Your account has been successfully created", "success").then((result) => {

					if (result.value) {
							window.location.href = "patient-login.php";  }
						else{
							window.location.href = "patient-login.php";  
						} ; 
						});
	
</script>';

    }
}

?>