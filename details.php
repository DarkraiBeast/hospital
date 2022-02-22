<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table border=5px>
    
        <th>Sr. No.</th>
        <th>Names of Patients Treated</th>
        <th>Name of Doctor 
        <th>TokenNo</th>
        </th>
        

    
    </table> -->
    
    
</body>
</html>
<?php
    include('dbconnect.php');
    if(isset($_POST['Show'])){
        $query = 'select * from details ("'.$_POST['details'].'");';
       
    if(mysqli_query($conn,$query,$query1)){
        echo "<br>";
    }else{
        echo "Error: " . $query. "<br>".mysqli_error($conn);
    }
    
    }

   
?>