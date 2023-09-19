<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection to the database failed due to " . mysqli_connect_error());
    }

    // Collect form data
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Roll = $_POST['Roll'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Other = $_POST['Other'];

    // Create an SQL query to insert data into the database
    $sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Roll`, `Email`, `Phone`, `Other`, `Date`) 
            VALUES ('$Name', '$Age', '$Roll', '$Email', '$Phone', '$Other', current_timestamp())";

    if (mysqli_query($con, $sql)) {
        // Data inserted successfully, redirect to a thank-you page
        header("Location: thank_you.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
