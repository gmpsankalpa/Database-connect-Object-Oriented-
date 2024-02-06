<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h3>Registration</h3>
    <form action="action.php" method="post">
        <label>First Name:</label>
        <input type="text" name="Fname" placeholder="Enter first name"><br><br>
        <label>Last Name:</label>
        <input type="text" name="Lname" placeholder="Enter last name"><br><br>
        <label>Email:</label>
        <input type="email" name="Email" placeholder="Enter email"><br><br>
        <label>Address:</label>
        <input type="address" name="Address" placeholder="Enter address"><br><br>
        <label>Password:</label>
        <input type="password" name="Password" placeholder="Enter password"><br><br>

        <input type="submit" name="submit"><br><br>
    </form>
</body>
</html>

<?php
    // if(isset('submit')){
    //     header index.php."insert success";
    // }else{
    //     header index.php."insert fail";
    // }
?>