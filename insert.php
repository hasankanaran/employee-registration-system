<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "t1";

// Get the values from the form using the correct names
$name = $_POST['name'];
$city = $_POST['city'];
$nic = $_POST['nic'];

//basic validations 
$name = trim($name);
$city = trim($city);
$nic = trim($nic);

$crit1 = $name != "";
$crit2 = $city != "";
$crit3 = $nic != "";
$crit4 = strlen($name) > 3;
$crit5 = strlen($city) > 2;
$crit6 = strlen($nic) == 10 || strlen($nic) == 12;

if (!$crit1) echo ('Name Is Required</br>');
if (!$crit2) echo ('City Is Required</br>');
if (!$crit3) echo ('Nic Is Required</br>');
if (!$crit4) echo ('Name should have more than 3 characters </br>');
if (!$crit5) echo ('City should have more than 2 characters</br>');
if (!$crit6) echo ('Wrong Nic</br>');

if (!$crit1 || !$crit2 || !$crit3 || !$crit4 || !$crit5 || !$crit6 ) die();


// Create a connection to the database
$con = mysqli_connect($servername, $username, $password, $databasename);

//database validation
$nicsql = "SELECT * FROM employee WHERE nic = '$nic'";
$resultnic = mysqli_query($con, $nicsql);

if (mysqli_num_rows($resultnic) > 0) {
    exit("Sorry NIC already exists");
}

// SQL query to insert data into the 'employee' table
$sql = "INSERT INTO employee (name, city, nic) VALUES ('$name', '$city', '$nic')";

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform the query and check for success
if (mysqli_query($con, $sql)) {
    echo "Record inserted successfully.";
} else {
    echo "Error please enter carrect details: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
<script>
    
</script>
</html>