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
        .card{
            margin-left: 30%;
        }


    </style>

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

            function loadData() {
                const attractionsRef = ref(db, 'app_data/daily_users');

    collectionRef.get()
        .then((querySnapshot) => {
            let totalActiveUsers = 0;

            querySnapshot.forEach((doc) => {
                const data = doc.data();
                const timestamp = data.timestamp.toDate(); 

                const year = timestamp.getFullYear(); 
                const month = timestamp.getMonth() + 1; 
                const day = timestamp.getDate(); 

                const userCount = data.userCount; 

                
                console.log(`Date: ${year}-${month}-${day}, Users: ${userCount}`);

                totalActiveUsers += userCount;
            });

            document.getElementById("totalActiveUsers").innerText = totalActiveUsers;
        })
        .catch((error) => {
            console.error("Error retrieving data: ", error);
        });
}


</script>


<div class="container">
    <body onload="loadData()">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-white order-card">
                    <div class="card-block">
                        <h6 class="m-b-20 text-center"><b>Total Active Users</b></h6>
                        <h2 id="totalActiveUsers" class="text-center"><span style="color: blue;">Loading...</span></h2>
                        <h6 class="m-b-20 text-center">As of <span id="userCount">...</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>

        <div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-9">
            <!-- Content on the left side -->
            <div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-9">
            <!-- Bar Chart -->
            <div id="barChart" style="min-height: 400px;" class="echart">

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
        <div class="col-md-6 col-xl-3">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <h4><li class="list-group-item text-center" ><strong>Attraction List</strong></li></h4>
                    <h5><li class="list-group-item" style="color: blue;">National Museum</li></h5>
                    <h5><li class="list-group-item" style="color: blue;">Manila Ocean Park</li></h5>
                    <h5><li class="list-group-item" style="color: blue;">Rizal Park</li></h5>
                    <h5><li class="list-group-item" style="color: blue;">National Museum</li></h5>
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