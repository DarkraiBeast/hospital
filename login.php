<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="details.php">
    
    <br> Enter your first name: <input type="text" name="" id=fname"">
            Enter your last name: <input type="text" name="" id="lname"><br><br>
            Enter your TokenNo: <input type="number" name="" id="token">
            <button type="submit">SUBMIT</button>
    </form>

</body>
</html>
<?php
    include('dbconnect.php')
    $query='insert into register ("'.$_POST['fname'].'")' ("'.$_POST['lname'].'")

?>