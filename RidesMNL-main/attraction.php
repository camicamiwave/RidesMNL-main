<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Attraction List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #3009FE;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            color: #3009FE;
        }

        th, td {
            text-align: left;
            padding: 15px;
            color: #3009FE;
            border: none;
            border-bottom: 2px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        #headerContainer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        #headerContainer #backToDashboard {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        #headerContainer #backToDashboard a {
            text-decoration: none;
            color: #007bff;
        }

        #headerContainer #backToDashboard i {
            margin-right: 5px;
        }

        #headerContainer h3 {
            margin: 0;
            color: black;
        }

        #searchContainer {
            position: relative;
        }

        #searchIcon {
            margin-left: 750px;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
            font-size: 20px;
        }

        #searchBar {
            margin-left: 750px;
            border-radius: 40px;
            height: 40px;
            width: 250px;
            padding: 8px 35px 8px 35px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #searchContainer #searchBar:focus {
            border: 2px solid #007bff; 
            outline: none;
        }

        #addContainer {
            position: relative;
            margin-left: 10px;
        }

        #addIcon {
            margin-left: 10px;
            color: white;
            font-size: 15px;
            position: absolute;
            left: 2px;
            top: 50%;
            transform: translateY(-50%);
        }

        #AddAttractionForm button {
            font-size: 14px;
            border-radius: 15px;
            width: 150px;
            height: 40px;
            background-color: #3009FE;
            color: white;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        #AddAttractionForm button:hover {
            background-color: #1e0763;
        }

        #AddAttractionForm {
            margin-left: auto;
        }

        .table-row {
            background-color: white;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .flex-container #searchContainer,
        .flex-container #AddAttractionForm {
            display: flex;
            align-items: center;
        }

        .edit-icon,
        .delete-icon {
            cursor: pointer;
            color: #007bff;
            font-size: 18px;
            margin-right: 10px;
            transform: scaleX(-1);
        }

        h3.font-weight-bold {
            color: black;
        }

        .back-button {
            color: #3009FE;
        }
        
    </style>
</head>

<body>

    <div class="content-wrapper">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">
                    <a href="javascript:history.go(-1);" class="btn btn-link back-button">
                    <i class="icon-arrow-left menu-icon"></i></a>
                    Attraction List</h3>
                </div>

        <div class="flex-container">
            <div id="searchContainer">
                <i id="searchIcon" class="fas fa-search"></i>
                <input type="text" id="searchBar" placeholder="Search...">
            </div>

            <div id="AddAttractionForm">
                <div id="addContainer">
                    <i id="addIcon" class="fas fa-plus-circle"></i>
                    <button onclick="window.location.href='AddAttractionForm.php'">Add Attraction</button>
                </div>
            </div>
        </div>
    <table id="attractionTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Complete Address</th>
                <th>Type of Attraction</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="attractionTableBody">
        </tbody>

    </table>

    <script>
    var attractions = [
        { name: "National Museum", address: "Padre Burgos Ave, Rizal Park, Ermita, Manila", type: "Museum" },
        { name: "Manila Ocean Park", address: "Quirino Grandstand, Ermita, Manila", type: "Park" }
    ];

    function displayAttractions() {
        var tableBody = document.getElementById("attractionTableBody");
        tableBody.innerHTML = "";

        attractions.forEach(function (attraction, index) {
            var row = tableBody.insertRow();
            row.className = "table-row";
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);

            cell1.innerHTML = attraction.name;
            cell2.innerHTML = attraction.address;
            cell3.innerHTML = attraction.type;

            var actionIcons = document.createElement("div");
            actionIcons.className = "action-icons";

            var editIcon = document.createElement("span");
            editIcon.className = "edit-icon";
            editIcon.innerHTML = '<i class="fas fa-edit"></i>';
            editIcon.onclick = function () {
                editAttraction(index);
            };

            var deleteIcon = document.createElement("span");
            deleteIcon.className = "delete-icon";
            deleteIcon.innerHTML = '<i class="fas fa-trash"></i>';
            deleteIcon.onclick = function () {
                deleteAttraction(index);
            };

            actionIcons.appendChild(editIcon);
            actionIcons.appendChild(deleteIcon);

            cell4.appendChild(actionIcons);
        });
    }

    function editAttraction(index) {
        var attraction = attractions[index];
        var editAttractionUrl = 'EditAttraction.php?name=' + encodeURIComponent(attraction.name) +
                               '&address=' + encodeURIComponent(attraction.address) +
                               '&type=' + encodeURIComponent(attraction.type);
        window.location.href = editAttractionUrl;
    }

    function deleteAttraction(index) {
        attractions.splice(index, 1);
        displayAttractions();
    }

    displayAttractions();
</script>

</body>

</html>

