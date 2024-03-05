import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";

import { firebaseConfig } from "./SERVER.JS";


// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase(app);
const dataRef = ref(db, "app_data/daily_users/2024/3/3/count");


// Set up a listener for changes on the data
onValue(dataRef, (snapshot) => {
    const data = snapshot.val(); 
    if (data) {
        // Data exists, do something with it 
        total_active_user.innerHTML = data;

        // Create a new Date object
        const now = new Date();

        // Get the current month, day, and year
        const month = now.getMonth() + 1; // Adding 1 because getMonth() returns zero-based month (0-11)
        const day = now.getDate();
        const year = now.getFullYear();

        // Ensure two digits for month and day
        const formattedMonth = month < 10 ? '0' + month : month;
        const formattedDay = day < 10 ? '0' + day : day;

        // Construct the date string in mm/dd/yyyy format
        const formattedDate = formattedMonth + '/' + formattedDay + '/' + year;

        as_of_date.innerHTML = "As of " + formattedDate;
        
    } else {
        // Data does not exist or is null
        console.log("No data available.");
    }
}, (error) => {
    // Handle any errors that occur during data retrieval
    console.error("Error fetching data:", error.message);
});

