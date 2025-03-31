<?php
include('mymethods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL</title>
    <style>
        .login{
            width: 30%;
            margin-left: 35%;
            margin-top: 10%;
            box-shadow: 4px 8px 8px grey;
            border-radius: 10px;
        }
        .inputbox{
            width: 94%;
            padding: 10px;
        }
        .loginbtn{
            width: 30%;
            padding: 10px;
            margin-left: 35%;
            background-color: green;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }
    </style>
</head>
<body>
<?php
include('menu.php');
?>
    <form class="login" method="POST" action="">
        <fieldset style="border:none">
            <h1><center><b><u>Student login</u></b></center></h1>
            <input type="email" class="inputbox" name="admin_id" placeholder="Email id " required><br><br><br>
            <input type="password" class="inputbox" name="password" placeholder="Password"><br><br><br>
            <input type="Submit" class="loginbtn" name="login" value="Login"><br><br><br>
        </fieldset>
    </form>
<?php

    if(isset($_POST['login']))
    {
        $res= loginAdmin($_POST);
        $record = mysqli_num_rows($res);
        if($record == 0)
        {
            echo "Sorry Invalid id or password";
        }
        else
            header('location:dashboard.php');
    }
?>
</body>
</html>