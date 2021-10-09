<?php

require_once("dky.php");

/* $arr = array(
    array(
        'username' => 'nam0106y1501',
        'password' => 'yeubemai151'
    ), array(
        'username' => 'cobemuadong',
        'password' => '123456'
    ), array(
        'username' => 'quentenroi',
        'password' => 'quenluonroi'
    )
);*/

register();

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
    <script>
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
        }

        var pwShown = 0;

        function showHide() {

            document.getElementById("eye").addEventListener("click", function() {
                if (pwShown == 0) {
                    pwShown = 1;
                    show();
                } else {
                    pwShown = 0;
                    hide();
                }
            }, false);

        }
    </script>
</head>

<body>
    <fieldset>
        <form action="" method="POST">
            <legend>Form đăng ký</legend>
            <span>User Name:</span>
            <br><input type="text" name="userName"><br><br>
            <span>Password:</span>
            <br><input type="password" name="password" id="pwd"><br><br>
            <button type="button" onclick="showHide()" id="eye">
                Double Click để hiện mật khẩu
            </button>
            <button>Register</button>
        </form>
    </fieldset>
</body>

</html>