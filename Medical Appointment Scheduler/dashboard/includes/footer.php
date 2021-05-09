<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
    <p class="text-muted text-center text-md-left">Copyright © 2021. All rights reserved</p>
</footer>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/core/core.js"></script>
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/vendors/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/js/sweet-alert.js"></script>
<!-- Data table -->
<script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="assets/js/data-table.js"></script>
<script>
    $('#demo').daterangepicker({
        "singleDatePicker": true,
        "timePicker": true,
        "timePickerIncrement": 30,
        "locale": {
            "format": "MM/DD/YYYY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
            "firstDay": 1
        },
        "startDate": "04/28/2021",
        "endDate": "05/04/2021",
        "opens": "center",
        "drops": "up"
    }, function (start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script>
</body>
</html>