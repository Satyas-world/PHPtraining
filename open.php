<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Registered</h1>
            <li>
                <b>First name</b>: 
                <?php
                    session_start();
                    if(isset($_SESSION['fname'])) 
                        echo $_SESSION['fname'];
                    else 
                        header("location:form.php");
                ?>
            </li>
            <li>
                <b>Last name</b>: 
                <?php
                    echo $_SESSION['lname'];
                ?>
            </li>
            <li>
                <b>Email</b>: 
                <?php
                    echo $_SESSION['email'];
                ?>
            </li>
            <li>
                <b>User_id</b>: 
                <?php
                    echo $_SESSION['User_id'];
                ?>
            </li>
            <li>
                <b>Password</b>: 
                <?php
                    echo $_SESSION['password'];
                ?>
            </li>
        </div>    
    </body>
</html>