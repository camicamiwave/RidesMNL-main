<?php include('includes/header.php'); ?>

  <div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">
                <a href="javascript:history.go(-1);" class="btn btn-link">
                <i class="icon-arrow-left menu-icon"></i></a>
                API Key of App</h3>
            </div>
            <div class="col-12 col-xl-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button type="button" style="border: none; color: #2900ff; background-color:#f5f7ff;">
                    <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>                                                   
                  </button>
                  <button type="button" style="border: none; color: #2900ff; background-color:#f5f7ff;">
                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>                                                                           
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 

    <div class="row" style="align-items: center;">
      <div class="col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="form-group row">
              <div class="col">
                <label>API Key of App</label>
                <div id="the-basics">
                  <input class="typeahead" type="text" value="123456789" readonly>
                </div>
              </div>
              <div class="col-sm-2 mt-4" style="text-align: center;"></div>
              <div class="col"></div>
            </div>
  </div>
  <!-- content-wrapper ends -->
<?php include('includes/footer.php'); ?>