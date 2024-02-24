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

    <div id="addAttractionForm">
        <label for="attractionName">Attraction Name</label>
        <input type="text" id="attractionName" placeholder="Enter attraction Name">

        <label for="attractionAddress">Complete Address</label>
        <input type="text" id="attractionAddress" placeholder="Enter Complete Address">
        

        <label for="displayLocation">Display Location</label>
        <select id="displayLocation">
            <option value=" " disabled selected>Choose City/Town</option>
        </select>
        

        <label for="attractionType">Type of Attraction</label>
        <select id="attractionType">
            <option value=" " disabled selected>Choose Type of Attraction</option>
        </select>
        

        <label for="longitude">Longitude</label>
        <input type="text" id="longitude" placeholder="Enter longitude">

        <label for="latitude">Latitude</label>
        <input type="text" id="latitude" placeholder="Enter Latitude">

        <button id="submitButton" onclick="addAttractionForm()">Submit</button>
        <button id="cancelButton" onclick="addAttractionForm()">Cancel</button>

    </div>

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