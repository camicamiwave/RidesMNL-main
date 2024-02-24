<?php include('includes/header.php'); ?>

    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">
                <a href="javascript:history.go(-1);" class="btn btn-link">
                <i class="icon-arrow-left menu-icon"></i></a>
                Bus</h3>
            </div>
            <div class="col-12 col-xl-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button type="button" class="btn btn-success btn-icon-text">
                    <i class="fa fa-plus" aria-hidden="true"></i>                                                   
                    Add
                  </button>
                  <button type="button" class="btn btn-info btn-icon-text">
                    <i class="fa fa-pencil" aria-hidden="true"></i> 
                    Edit                                                                             
                  </button>
                  <button type="button" class="btn btn-danger btn-icon-text">
                    <i class="fa fa-trash" aria-hidden="true"></i>                        
                    Delete
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
                  <label>Enter Fare</label>
                  <div id="the-basics">
                    <input class="typeahead" type="text" value="P15.00" readonly>
                  </div>
                </div>
                <div class="col-sm-2 mt-4" style="text-align: center;">
                  <label></label>
                  <div>
                    <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col">
                  <label>Enter Maximum Kilometer</label>
                  <div id="bloodhound">
                    <input class="typeahead" type="text" value="4" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <label>Enter Fare</label>
                  <div id="the-basics">
                    <input class="typeahead" type="text" value="P20.00" readonly>
                  </div>
                </div>
                <div class="col-sm-2 mt-4" style="text-align: center;">
                  <label></label>
                  <div>
                    <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col">
                  <label>Enter Maximum Kilometer</label>
                  <div id="bloodhound">
                    <input class="typeahead" type="text" value="8" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <label>Enter Fare</label>
                  <div id="the-basics">
                    <input class="typeahead" type="text" value="P25.00" readonly>
                  </div>
                </div>
                <div class="col-sm-2 mt-4" style="text-align: center;">
                  <label></label>
                  <div>
                    <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col">
                  <label>Enter Maximum Kilometer</label>
                  <div id="bloodhound">
                    <input class="typeahead" type="text" value="10" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
<?php include('includes/footer.php'); ?>