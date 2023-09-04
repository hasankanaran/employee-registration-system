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

//basic validations 
$name = trim($name);
$city = trim($city);
$nic = trim($nic);

$crit1 = $name !="";
$crit2 = $city !=""; 
$crit3 = $nic !="";  

if(!$crit1 ) echo ('Name Is Required</br>');
if(!$crit2 ) echo ('City Is Required</br>');
if(!$crit3 ) echo ('NicIs Required</br>');

if(!$crit1 || !$crit2 || !$crit3)die();
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

