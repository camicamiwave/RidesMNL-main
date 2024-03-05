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

        // Inside your onValue() listener or wherever you are fetching the attraction data
        const attractionList = document.getElementById("attractionList");

        // Clear existing list items
        attractionList.innerHTML = "";

        // Counter variable to limit the number of list items
        let count = 0;

        // Iterate over each attraction
        Object.keys(attractionsData).forEach(attractionId => {
            // Exit loop if count reaches 5
            if (count >= 5) return;

            const attraction = attractionsData[attractionId];
            const attractionName = attraction.attractionName;

            // Create a list item for each attraction
            const listItem = document.createElement("li");
            listItem.className = "list-group-item";
            listItem.textContent = attractionName;

            // Append the list item to the unordered list
            attractionList.appendChild(listItem);

            // Increment the counter
            count++;
        });

    } else {
        // Data does not exist or is null
        console.log("No attractions available.");
    }
}, (error) => {
    // Handle any errors that occur during data retrieval
    console.error("Error fetching attractions data:", error.message);
});