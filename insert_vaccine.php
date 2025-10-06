<?php
include('database.php');?>
<?php
if (isset($_POST['submit'])) {
    // Collect form data
    $vaccine_name   = $_POST['vaccine_name'];
    $expiration_date  = $_POST['expiration_date'];
    $description = $_POST['description'];

    
    $sql = "INSERT INTO vaccine (vaccine_name, expiration_date, description)
            VALUES ('$vaccine_name', '$expiration_date', '$description')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        $msg = "✅ vaccine added successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?> 

<form method="post" action="">
    Vaccine Name: <input type="text" name="vaccine_name" required><br><br>
    Expiration Date: <input type="date" name="expiration_date" required><br><br>
    Description: <input type="text" name="description" required><br><br>
    <input type="submit" name="submit" value="Save">
</form>

<?php
if (isset($msg)) {  
    echo "<p>$msg</p>";
}
?>



