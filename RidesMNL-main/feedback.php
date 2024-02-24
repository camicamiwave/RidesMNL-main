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

    <!-- content-wrapper ends -->
<?php include('includes/footer.php'); ?>