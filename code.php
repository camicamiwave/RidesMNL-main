<?php

session_start();

include('dbcon.php');

// Check if the button is clicked:
if(isset($_POST['save_attraction']))
{
    $attr_name = $_POST['attractionName'];
    $attr_address = $_POST['attractionAddress'];
    $attr_loc = $_POST['displayLocation'];
    $attr_type = $_POST['attractionType'];
    $attr_longitude = $_POST['longitude'];
    $attr_latitude = $_POST['latitude'];

    $postData = [
        'name'=>$attr_name,
        'address'=>$attr_address,
        'location'=>$attr_loc,
        'type'=>$attr_type,
        'longitute'=>$attr_long,
        'latitude'=>$attr_lat,
        'location'=>$attr_loc,
    ];

    $ref_table = "app_data/near_me/attractions";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result)
    {
        $_SESSION['status'] = "Attraction Added Successfully";
        header('Location: attraction.php');
    }
    else
    {
        $_SESSION['status'] = "Attraction Not Added";
        header('Location: attraction.php');
    }
}

?>