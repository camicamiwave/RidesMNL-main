<?php include('includes/header.php'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale" style="align-items: center; background-color: white;">
                    <div class="card-body">
                        <h4 class="mb-4" style="font-weight: bold; color:black; ">Total Active Users</h4>
                        <p class="fs-30 mb-2" style="color:blue; ">3000</p>
                        <p style="align-items:center; color:black; ">As of 12/01/2023</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 stretch-card grid-margin">
            <div class="card">
                <div class="card-body" >
                    <!-- Bar Chart -->
                    <div id="barChart" style="min-height: 500px;" class="echart" >

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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <p class="card-title">Charts</p>
                    <div class="charts-data">
                    <div class="mt-3">
                        <p class="mb-0">Data 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                            <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">5k</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="mb-0">Data 2</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">1k</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="mb-0">Data 3</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">992</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="mb-0">Data 4</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="progress progress-md flex-grow-1 mr-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">687</p>
                        </div>
                    </div>
                    </div>  
                </div>
                </div>
            </div>
            <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                <div class="card data-icon-card-primary">
                <div class="card-body">
                    <p class="card-title text-white">Number of Meetings</p>                      
                    <div class="row">
                    <div class="col-8 text-white">
                        <h3>34040</h3>
                        <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p>
                    </div>
                    <div class="col-4 background-icon">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>




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