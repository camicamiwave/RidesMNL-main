<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RidesMNL - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo_1.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center img-fluid">
                <img src="images/logo_1.png" alt="logo">
              </div>
              <form class="pt-3">

                <h6>Username</h6>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Enter your username">
                </div>


                <h6>Password</h6>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter your password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="login">Log In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->

  <!-- Firebase SDK -->
  <script src="https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js"></script>

  <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
    import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";

    const firebaseConfig = {
    apiKey: "AIzaSyCPSg2yG1TnhYgzK2aNEVpbxMf4w2qwYP0",
    authDomain: "ridesmnl-48ff4.firebaseapp.com",
    databaseURL: "https://ridesmnl-48ff4-default-rtdb.firebaseio.com",
    projectId: "ridesmnl-48ff4",
    storageBucket: "ridesmnl-48ff4.appspot.com",
    messagingSenderId: "51707026546",
    appId: "1:51707026546:web:96df015fa7a950149836eb",
    measurementId: "G-N3C1209JN6"
    };
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    // get ref to database services
    const db = getDatabase(app);

    document.getElementById("login").addEventListener('click', function(e) {
      e.preventDefault(); // prevent form submission

      const username = document.getElementById("exampleInputUsername1").value;

      // Write user data to the database
      set(ref(db, 'accounts/' + username), {
        username: username
      });

      alert("Login Successfully!");
       
    // Redirect to the dashboard page
    window.location.href = "index.php";
    });

  </script>
</body>

</html>