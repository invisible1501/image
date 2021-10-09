<?php

require_once("dnhap.php");

access();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #dki {
            background-color: white;
            border: thin solid gray;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px; 
            border-radius: 4px;
            height: 25px;
            width: 70px;
            font-size: 15px;
        }
        span {
            font-size: 19px;
            font-weight: bold;
        }
        input {
            height: 20px;
            vertical-align: middle;
        }
        label {
            font-weight: bold;
            font-size: 19px;
        }
    </style>
</head>
<body>
    <fieldset>
    <form action="" method="POST">
        <legend>Đăng nhập</legend>
        <span>User Name:</span> 
        <br><input type="text" name="userName"><br><br>
        <span>Password:</span> 
        <br><input type="password" name="password"><br><br>
        <button>Login</button>
    </form>
    </fieldset>
</body>
</html>