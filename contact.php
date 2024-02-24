<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Contact Support</title>

<style>
    #headerContainer h3 {
        margin: 0;
        color: black;
    }

    .card {
        margin-top: 30px;
        display: grid;
        grid-template-columns: 25% 75%;
        border: 1px solid #ccc;
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-left {
        padding: 16px;
        display: grid;
        grid-template-columns: 30% 70%;
        align-items: center;
        justify-content: space-between;
        border-right: 2px solid gray;
        margin-left: 40px;
    }

    .card-left img {
        border-radius: 50%;
        margin-right: 16px;
        border-style: solid;
        margin-top: 10px;
        margin-bottom: 10px;
        
    }

    .card-left-infos {
        font-size: medium;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 40px;  
    }

    .card-right {
        padding: 16px;
        position: relative;
        margin-top: 10px;
    }

    .card-right p{
        font-size: 16px;
    }

    .subject {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .delete-icon {
        position: absolute;
        top: 10px;
        right: 2%;
        color: red;
        cursor: pointer;
        
    }

    .time-since-posted {
        margin-top: 10px;
        color: #888;
        font-size: 12px;
    }

    @media only screen and (min-width: 768px) {
        .card {
            grid-template-columns: 30% 70%;
        }}
        
</style>

<div class="content-wrapper">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">
        <a href="javascript:history.go(-1);" class="btn btn-link back-button">
        <i class="icon-arrow-left menu-icon"></i></a>Contact Support</h3>
    </div>


    <div class="card">
        <div class="card-left">
            <img src="images/logo_1.png" alt="User Profile Picture" width="90" height="90">
            <div class="card-left-infos">
                <p>Juan Dela Cruz</p>
                <p>Jdc@gmail.com</p>
                <p>123456788901</p>
            </div>
        </div>
        <div class="card-right">
            <i class="fas fa-trash delete-icon" onclick="handleDeleteClick()"></i>
            <h4 class="subject">Subject: Mobile Application</h4>
            <p>Excellent application...</p>
            <p class="time-since-posted">10 mins ago</p>
        </div>
    </div>

<script>
    function handleFilterChange() {
        var selectedValue = document.getElementById("filterDropdown").value;
        console.log("Selected Filter: " + selectedValue);
    }

    function handleDeleteClick() {
        console.log("Delete icon clicked");
    }
</script>

<?php include('includes/footer.php'); ?>

<?php include('includes/footer.php'); ?>