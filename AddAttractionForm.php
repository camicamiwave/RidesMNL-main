<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Attraction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
            margin: 20px;
            color: black;
        }

        #addAttractionForm {
            max-width: 600px;
            margin: 5px auto;
            
        }

        #addAttractionForm label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        #addAttractionForm input,
        #addAttractionForm select {
            width: 100%;
            height: 45px;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box; 
            border: none;
            border-radius: 5px;
            text-align: left;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
        }

        #cancelButton {
            border-radius: 15px;
            width: 48%;
            margin-right: 5px;
            padding: 10px;
            background-color: #808080;
            color: white;
            border: none;
            cursor: pointer;
            float: left;
        }

        #submitButton {
            border-radius: 15px;
            width: 48%;
            padding: 10px;
            margin-left: 5px;
            background-color: #3009FE;
            color: white;
            border: none;
            cursor: pointer;
            float: right;
            
        }

        ;:hover{
            background-color: cadetblue;
        }

        ::placeholder{
            font-style: italic;
        }

    </style>
</head>

<body>

<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">
                    <a href="javascript:history.go(-1);" class="btn btn-link">
                    <i class="icon-arrow-left menu-icon"></i></a>
                    Attraction List</h3>
                </div>
              </div>
            </div>
        </div>  

        <form action="code.php" method="POST">
            <div id="addAttractionForm">
                <label for="attractionName">Attraction Name</label>
                <input type="text" name="attractionName" placeholder="Enter Attraction Name">

                <label for="attractionAddress">Complete Address</label>
                <input type="text" name="attractionAddress" placeholder="Enter Complete Address">

                <label for="displayLocation">Display Location</label>
                <select name="displayLocation">
                    <option value="" disabled selected>Choose City/Town</option>
                    <option value="Location 1">Location 1</option>
                    <option value="Location 2">Location 2</option>
                    <option value="Location 3">Location 3</option>
                </select>

                <label for="attractionType">Type of Attraction</label>
                <select name="attractionType">
                    <option value="" disabled selected>Choose Type of Attraction</option>
                    <option value="Type 1">Type 1</option>
                    <option value="Type 2">Type 2</option>
                    <option value="Type 3">Type 3</option>
                </select>

                <label for="longitude">Longitude</label>
                <input type="text" name="longitude" placeholder="Enter Longitude">

                <label for="latitude">Latitude</label>
                <input type="text" name="latitude" placeholder="Enter Latitude">

                <button type="submit" name="save_attraction">Submit</button>
                <button id="cancelButton" onclick="window.location.href='index.php'">Cancel</button>
            </div>
        </form>
</div>

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js"></script>


    <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
    import { getDatabase, ref, push } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";

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
    const db = getDatabase(app);

    document.getElementById("submitButton").addEventListener('click', function (e) {
        e.preventDefault();

        const attractionName = document.getElementById("attractionName").value;
        const attractionAddress = document.getElementById("attractionAddress").value;
        const displayLocation = document.getElementById("displayLocation").value;
        const attractionType = document.getElementById("attractionType").value;
        const longitude = document.getElementById("longitude").value;
        const latitude = document.getElementById("latitude").value;

        // Push data to the database
        const attractionsRef = ref(db, 'app_data/near_me/attractions');
        push(attractionsRef, {
            attractionName: attractionName,
            attractionAddress: attractionAddress,
            displayLocation: displayLocation,
            attractionType: attractionType,
            longitude: longitude,
            latitude: latitude
        }).then(() => {
            // Redirect to the dashboard page after data is successfully pushed
            window.location.href = "attraction.php";
        }).catch((error) => {
            console.error("Error adding attraction: ", error);
        });
    });
</script>

    <script>

        var attractions=[]

        function addAttractionForm() {
            var newName = document.getElementById("attractionName").value;
            var newAddress = document.getElementById("attractionAddress").value;
            var newType = document.getElementById("attractionType").value;

            attractions.push({ name: newName, address: newAddress, type: newType });

            window.location.href = 'attraction.php';
        }

        var displayLocationSelect = document.getElementById("displayLocation");
        var attractionTypeSelect = document.getElementById("attractionType");

        var displayLocationOptions = ["Location 1", "Location 2", "Location 3"];
        var attractionTypeOptions = ["Type 1", "Type 2", "Type 3"];

        populateDropdown(displayLocationSelect, displayLocationOptions);
        populateDropdown(attractionTypeSelect, attractionTypeOptions);

        function populateDropdown(selectElement, optionsArray) {
            for (var i = 0; i < optionsArray.length; i++) {
                var option = document.createElement("option");
                option.text = optionsArray[i];
                option.value = optionsArray[i];
                selectElement.add(option);
            }
        }
    </script>

</body>

</html>

<?php include('includes/footer.php'); ?>