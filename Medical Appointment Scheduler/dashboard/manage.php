<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">My Appointments</h4>
        </div>
    </div>
    <div class="row">
        <?php if ($user_type == "patient") { ?>
            <div class="col-lg-12 col-xl-12 col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-3">Create a new appointment</h6>
                        </div>
                        <form class="forms-sample login-form" name="app_form" id="app_form" method="post">
                            <div class="form-group">
                                <input type="hidden" value="<?php echo $user_id ?>" name="patient_id">
                                <label for="exampleFormControlSelect">Select Physician</label>
                                <select class="form-control" id="exampleFormControlSelect" name="physician_id">
                                    <option selected disabled>Choose</option>
                                    <?php $get_physician_name = $crudObj->fetch_all_record("physician_id,first_name,last_name", "physician");
                                    foreach ($get_physician_name as $phy) { ?>
                                        <option value="<?php echo $phy['physician_id']; ?>"><?php echo $phy['first_name'] . " " . $phy['last_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Select Nurse</label>
                                <select class="form-control" id="exampleFormControlSelect" name="nurse_id">
                                    <option selected disabled>Choose</option>
                                    <?php
                                    $get_nurse_name = $crudObj->fetch_all_record("nurse_id,first_name,last_name", "nurse");
                                    foreach ($get_nurse_name as $nurse) { ?>
                                        <option value="<?php echo $nurse['nurse_id']; ?>"><?php echo $nurse['first_name'] . " " . $nurse['last_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPrice">Appointment Date</label>
                                        <input type="date" class="form-control" id="test-demo" name="app_date" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPrice">Appointment Time</label>
                                        <input type="time" class="form-control" id="test-demo" name="app_time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn mr-2 mb-2 mb-md-0 btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <?php } ?>
        <div class="com-md-12 col-lg-12 col-xl-12 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Appointment List</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Patient Name</th>
                                <th>Physician Name</th>
                                <th>Nurse Name</th>
                                <th>Appointment Date & Time</th>
                                <?php if ($user_type == "patient") { ?>
                                    <th>Action</th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($user_type == "patient") {

                                $where = array('patient_id' => $user_id);
                            } else if ($user_type == "nurse") {
                                $where = array('nurse_id' => $user_id);
                            } else {
                                $where = array('physician_id' => $user_id);
                            }
                            $counter = 0;
                            $get_appointment = $crudObj->select_record("*", $where, "appointment");
                            foreach ($get_appointment as $appointment) {
                                $counter++;
                                $where_phy_name = array("physician_id" => $appointment['physician_id']);
                                $where_nurse_name = array("nurse_id" => $appointment['nurse_id']);
                                if ($user_type != "patient") {
                                    $where_patient_name = array("user_id" => $appointment['patient_id']);
                                    $get_patient_name = $crudObj->select_record("first_name,last_name", $where_patient_name, "patient");
                                }
                                $get_physician_name = $crudObj->select_record("first_name,last_name", $where_phy_name, "physician");
                                $get_nurse_name = $crudObj->select_record("first_name,last_name", $where_nurse_name, "nurse");
                                ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <?php if ($user_type == "patient") { ?>
                                        <td>
                                            <a href="info.php?patient_id=<?php echo $user_id; ?>"><?php echo $full_name; ?></a>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="info.php?patient_id=<?php echo $appointment['patient_id']; ?>"><?php echo $get_patient_name[0]['fist_name'] . " " . $get_patient_name[0]['last_name']; ?></a>
                                        </td>
                                    <?php } ?>
                                    <td>
                                        <a href="info.php?physician_id=<?php echo $appointment['physician_id']; ?>"><?php echo $get_physician_name[0]['first_name'] . " " . $get_physician_name[0]['last_name']; ?></a>
                                    </td>
                                    <td>
                                        <a href="info.php?nurse_id=<?php echo $appointment['nurse_id']; ?>"><?php echo $get_nurse_name[0]['first_name'] . " " . $get_nurse_name[0]['last_name']; ?></a>
                                    </td>
                                    <td><?php echo $appointment['time']; ?></td>
                                    <?php if ($user_type == "patient") { ?>
                                        <td>
                                            <a class="btn btn-outline-danger btn-sm"
                                               onclick="delete_data_row('<?php echo $appointment["appointment_id"] ?>')"
                                               href="#"><i class="fas fa-trash"></i>Delete</a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
<script type="text/javascript">
    // Submit create appointment data using Modal
    $("form[name='app_form']").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "../actions/action-reservation-form.php",
            type: 'POST',
            dataType: 'json',
            data: formData,
            success: function (data) {
                console.log(data);
                if (data == 'true') {
                    Swal.fire("Done!", "Appointment added successfully!", "success");
                    window.setTimeout(function () {
                        location.reload()
                    }, 1000)
                } else {
                    Swal.fire("Error!", "Sorry, there was an error! Appointment scheduling failed!", "error");
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

</script>
<script>

    function delete_data_row(rowno) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                var dataString = "appointment_id=" + rowno;
                $.ajax({
                    url: "../actions/action-delete.php",
                    method: "POST",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        Swal.fire("Done!", "Appointment deleted!", "success");
                        window.setTimeout(function () {
                            location.reload()
                        }, 1000)

                    }
                });
            }
        });
    }

</script>

