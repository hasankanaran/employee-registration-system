<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "t1";

// Create a connection to the database
$con = mysqli_connect($servername, $username, $password, $databasename);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the values from the form using the correct names
$name = $_POST['name'];
$city = $_POST['city'];
$nic = $_POST['nic'];

// SQL query to insert data into the 'employee' table
$sql = "INSERT INTO employee (name, city, nic) VALUES ('$name', '$city', '$nic')";

// Perform the query and check for success
if (mysqli_query($con, $sql)) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
</html>

