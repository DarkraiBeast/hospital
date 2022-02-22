<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        .token{
            padding: 30;
        }
        .register{
            scroll-margin-left: 20px;
        }
        .title{
            background-color: orange;
            height: 30px;
            text-align: center;
        }
        .submit{
            text-align: center;
        }
        .login{
            text-align: center;
        }
        .details{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <form action="login.php" method="POST" >
        <div class="register">
           <div class="title">
                <b>
                    REGISTER YOURSELF <br>
                </b> 
           </div> 
           <div class="login">
              <br> Email: <input type="email" name="" id="email"><br>
               Password: <input type="password" name="" id="pass"><br><br>
               
           </div>
           <div class="submit">
            <button type=" submit"><b> SUBMIT</b> </button>
           </div>
           
        </div>
        
        </form>

    </div>
    <div class="details">
            <form action="details.php">
            <br><br>
               Click here to see details of Patients Treated<br>
                <button >Show</button>
        
            </form>
        </div>
</body>
</html>
<?php
    // include('dbconnect.php')
    // if(isset($_POST['Show'])){
    // $query= 'use Hospital;'
    // }
?>
