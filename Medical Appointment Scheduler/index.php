<?php include('includes/header.php'); ?>

<div class="page-wrapper full-page">
    <h2 class="m-4 text-center">Medical Appointment Scheduler</h2>
    <div class="signin-heading text-center mt-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 mb-2">

                <a href="patient-login.php">
                    <button class="btn btn-primary btn-lg">Login as a Patient</button>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 mb-2">

                <a href="physician-login.php">
                    <button class="btn btn-success btn-lg">Login as a Physician</button>
                </a>

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 mb-2">
                <a href="nurse-login.php">
                    <button class="btn btn-warning btn-lg">Login as a Nurse</button>
                </a>
            </div>
        </div>
    </div>

    <div class="join-now-heading text-center mt-2 mb-2">
        ` <h6>Register Now </h6>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon text-center">
                            <a href="patient-registration.php"> <img src="assets/images/img_320438.png" class="card-img"
                                                                     alt="img">
                        </div>
                        </a>
                        <div class="card-text text-center mt-2">
                            <a href="patient-registration.php"><p>I'm a Patient</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon text-center">
                            <a href="physician-registration.php"> <img src="assets/images/th.jfif" class="card-img"
                                                                       alt="img">
                        </div>
                        </a>
                        <div class="card-text text-center mt-2">
                            <a href="physician-registration.php"><p>I'm a Physician</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon text-center">
                            <a href="nurse-registration.php"> <img src="assets/images/img_529433.png"
                                                                   class="card-nurse-img" alt="img">
                        </div>
                        </a>
                        <div class="card-text text-center mt-2">
                            <a href="nurse-registration.php"><p>I'm a Nurse</p></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
