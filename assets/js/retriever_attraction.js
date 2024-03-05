import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
import { getDatabase, ref, onValue, remove } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";
import { firebaseConfig } from "./SERVER.js";

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase(app);
const attractionsRef = ref(db, "app_data/near_me/attractions");

// Set up a listener for changes on the data
onValue(attractionsRef, (snapshot) => {
    const attractionsData = snapshot.val();
    if (attractionsData) {
        // Data exists, do something with it 
        console.log(attractionsData);  
        
        // Assuming you have an HTML table with id "attractionTableBody" for the table body
        const tableBody = document.getElementById("attractionTableBody");

        // Clear the existing table rows
        tableBody.innerHTML = "";

        // Iterate over each attraction
        Object.keys(attractionsData).forEach(attractionId => {
            const attraction = attractionsData[attractionId];
            const attractionAddress = attraction.attractionAddress;
            const attractionName = attraction.attractionName;
            const attractionType = attraction.attractionType;

            // Create a new row
            const row = tableBody.insertRow();
            row.className = "table-row";

            // Insert cells for each attribute
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);
            const cell4 = row.insertCell(3);

            // Populate cell values
            cell1.innerHTML = attractionName;
            cell2.innerHTML = attractionAddress;
            cell3.innerHTML = attractionType;

            // Create action icons
            const actionIcons = document.createElement("div");
            actionIcons.className = "action-icons";

            // Create edit icon
            const editIcon = document.createElement("span");
            editIcon.className = "edit-icon";
            editIcon.innerHTML = '<i class="fas fa-edit"></i>';
            editIcon.onclick = function () {
                editAttraction(attractionId); // Pass attractionId to edit function
            };

            // Create delete icon
            const deleteIcon = document.createElement("span");
            deleteIcon.className = "delete-icon";
            deleteIcon.innerHTML = '<i class="fas fa-trash"></i>';
            deleteIcon.onclick = function () {
                console.log("Deleted..." + attractionId)

                // Remove the attraction from the database
                remove(ref(db, `app_data/near_me/attractions/${attractionId}`))
                    .then(() => {
                        console.log("Attraction deleted successfully.");
                    })
                    .catch((error) => {
                        console.error("Error deleting attraction:", error.message);
                    });
            };

            // Append icons to actionIcons
            actionIcons.appendChild(editIcon);
            actionIcons.appendChild(deleteIcon);

            // Append actionIcons to the cell
            cell4.appendChild(actionIcons);
        });
    } else {
        // Data does not exist or is null
        console.log("No attractions available.");
    }
}, (error) => {
    // Handle any errors that occur during data retrieval
    console.error("Error fetching attractions data:", error.message);
});