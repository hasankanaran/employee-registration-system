<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
</head>
<body>
    <div>
    <h1>Students</h1>
    <table id="" border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CITY</th>
                <th>NIC</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $con = mysqli_connect('localhost','root','root','t1');
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($con,$sql);

            ?>
        </tbody>
    </table>
    </div>
   
</body>
</html>