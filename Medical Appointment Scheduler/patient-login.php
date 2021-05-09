<?php include('includes/header.php'); ?>
<div class="page-wrapper full-page">
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="card">
            <div class="auth-form-wrapper px-4 py-5">
                <div class="signin-heading text-center">
                    <h2>Patient | Log In</h2>
                </div>
                <form method="post" onsubmit="return do_login();" class="forms-sample mt-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Id</label>
                                <input type="text" class="form-control" id="user_id" placeholder="User Id">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="user_pass"
                                       autocomplete="current-password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary mr-2 mb-2 mb-md-0 text-white btn-block">Login</button>
                    </div>
                    <div class="mt-3">
                        <p class="text-muted"> Not a user? <a href="index.php">Register Now</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function do_login() {

        var user_id = $("#user_id").val();
        var user_pass = $("#user_pass").val();
        if (user_id != "" && user_pass != "") {
            $.ajax
            ({
                type: 'post',
                url: 'actions/action-patient-login.php',
                dataType: "json",
                data: {
                    do_login: "do_login",
                    user_id: user_id,
                    user_pass: user_pass
                },
                crossDomain: true,
                cache: false,
                success: function (response) {

                    if (response == 'true') {
                        window.location.href = "dashboard/";
                    } else {
                        Swal.fire("Error!", "Wrong Details", "error");
                    }
                }
            });
        } else {
            Swal.fire("Error!", "Please Fill All The Details", "error");
        }

        return false;
    }

</script>

<?php include('includes/footer.php'); ?>

