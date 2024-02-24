<?php include('includes/header.php'); ?>

<div class="content-wrapper">
    <style>
        body{
            background:#FAFAFA;
        }
        .order-card {
            color: #000;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1); /* Add shadow */
            border-radius: 0; /* Remove border-radius */
        }

        .card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }
    </style>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-white order-card">
            <div class="card-block">
            <h6 class="m-b-20 text-center"><b>Total Active Users</b></h6>   
                <h2 class="text-center"><span style="color: blue;">3000</span></h2>
                <h6 class="m-b-20 text-center">As of 12/01/2023</h6>
            </div>
        </div>
    </div>
</div> <!-- content-wrapper ends -->



                        <!-- Bar Chart -->
            <div id="barChart" style="min-height: 400px;" class="echart"></div>

            <script>
            document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#barChart")).setOption({
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Dec']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [500, 1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
                    type: 'bar'
                }]
                });
            });
            </script>
            <!-- End Bar Chart -->

              <!-- Vendor JS Files -->
            <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/chart.js/chart.umd.js"></script>
            <script src="assets/vendor/echarts/echarts.min.js"></script>
            <script src="assets/vendor/quill/quill.min.js"></script>
            <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
            <script src="assets/vendor/tinymce/tinymce.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<?php include('includes/footer.php'); ?>