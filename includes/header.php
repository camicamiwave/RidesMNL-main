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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
        <link rel="stylesheet" href="css/modal.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/logo_1.png" />
    </head>

    <body>

        <!-- Include Firebase SDK -->
        <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore.js"></script>
        <script>
            // Initialize Firebase
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
        </script>

        <div class="container-scroller">
            <?php include('navbar.php'); ?>
            <div class="container-fluid page-body-wrapper">
                <?php include('sidebar.php'); ?>
                <!-- partial -->
                <div class="main-panel">
                    