<?php include('includes/header.php'); ?>

    <div class="content-wrapper">

        
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">
                <a href="javascript:history.go(-1);" class="btn btn-link">
                <i class="icon-arrow-left menu-icon"></i></a>
                User Feedback</h3>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Oldest - Newest
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">Newest - Oldest</a>
                      <a class="dropdown-item" href="#">Oldest - Newest</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Cards-->
        <a href="rates_bus.php" style="text-decoration: none;">
        <div class="card mb-3" style="max-width: 350px;">
            <div class="row no-gutters">
            <div class="col-md-4 m-auto pl-3">
                <i class="fa fa-bus" aria-hidden="true" style="font-size:30px; color: #ffffff; background:#f16c99; padding:10%; border-radius:100%;"></i>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title m-auto" style="color:#f16c99;">Bus</h5>
                </div>
            </div>
            </div>
        </div>
        </a>

        

        
    <!-- content-wrapper ends -->
<?php include('includes/footer.php'); ?>