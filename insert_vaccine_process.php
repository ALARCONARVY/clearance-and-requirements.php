<?php
include('petvaccine.php');

if (isset($_POST['submit'])) {
    // Collect form data
    $vaccine_name   = $_POST['vaccine_name'];
    $expiration_date  = $_POST['expiration_date'];
    $description = $_POST['description'];

    
    $sql = "INSERT INTO vaccine ('vaccine_name, expiration_date, description')
            VALUES ('$vaccine_name', '$expiration_date', '$description')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        $msg = "✅ vaccine added successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?> 
✅ Fixes I made