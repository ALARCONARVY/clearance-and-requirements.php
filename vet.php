<?php

include('database.php');


$sql = "SELECT * FROM veterinarian";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo "<h1>Veterinarian table </h1>";
    echo "<table border='1'>";
    echo "<tr><th>Vet ID</th><th>FIRST Name</th><th>LAST NAME</th><th>EMAIL</th><th>PHONE NUMBER</th><th>LICENSE NUMBER</th></tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row["vet_id"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["phone_number"]."</td>";
        echo "<td>".$row["license_number"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}
mysqli_close($conn);
?>

