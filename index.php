<?php include('includes/header.php'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin transparent">
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
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-tale" style="background-color: white; color:black;">
                <div class="card-people mt-auto">
                    <p class="card-title" style="margin-left: 20px;">Attraction List</p>
                    <ul class="list-group list-group-flush flex-grow-1" style="align-items: left;">
                        <li class="list-group-item">National Museum</li>
                        <li class="list-group-item">Manila Ocean Park</li>
                        <li class="list-group-item">Rizal Park</li>
                    </ul>
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
              <div class="card">
                <div class="card-body">
                  <p class="card-title">User Feedback</p>
                  <ul class="icon-data-list">
                    <li>
                      <div class="d-flex">
                        <img src="images/faces/face1.jpg" alt="user">
                        <div>
                          <p class="text-info mb-1">Isabella Becker</p>
                          <p class="mb-0">Sales dashboard have been created</p>
                          <small>9:30 am</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <img src="images/faces/face2.jpg" alt="user">
                        <div>
                          <p class="text-info mb-1">Adam Warren</p>
                          <p class="mb-0">You have done a great job #TW111</p>
                          <small>10:30 am</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                      <img src="images/faces/face3.jpg" alt="user">
                     <div>
                      <p class="text-info mb-1">Leonard Thornton</p>
                      <p class="mb-0">Sales dashboard have been created</p>
                      <small>11:30 am</small>
                     </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <img src="images/faces/face4.jpg" alt="user">
                        <div>
                          <p class="text-info mb-1">George Morrison</p>
                          <p class="mb-0">Sales dashboard have been created</p>
                          <small>8:50 am</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <img src="images/faces/face5.jpg" alt="user">
                        <div>
                        <p class="text-info mb-1">Ryan Cortez</p>
                        <p class="mb-0">Herbs are fun and easy to grow.</p>
                        <small>9:00 am</small>
                        </div>
                      </div>
                    </li>
                  </ul>
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