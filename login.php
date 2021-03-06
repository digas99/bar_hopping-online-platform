<?php
    //$conn = mysqli_connect();
    
    // send info to DB
    $nome = $_POST['name'];
    $surname = $_POST['surname'];
    $curso = $_POST['curso'];
    $nmec = $_POST['nmec'];
    $mail = $_POST['mail'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    
    if ($nome != "" && $surname != "" && $curso != "" && $nmec != "" && $mail != "" && $user != "" && $pass != "") {
        $sql = "INSERT INTO _Registos (user, pass, nome, apelido, curso, nmec, mail) VALUES ('$user','$hashedPass','$nome','$surname', '$curso', '$nmec', '$mail');";

        $connect = mysqli_query($conn, $sql);
    }
?>

<html lang=pt>
    <head>
        <link rel="icon" type="image/png" href="styles/images/ralli9-20_logo.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <title>Ralli9/20</title>
        <!-- Bootstrap minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/bootstrap.css">
        
        <style>
            a, a:hover {
                text-decoration: none;
                float: right;
                font-size: 19px;
                color: white;
            }
            
            i {
                border: solid #011897;
                border-width: 0 3px 3px 0;
                display: inline-block;
                padding: 4px;
                border-color: white;
                transition: 0.4s;
            }

            .right {
              transform: rotate(-45deg);
              -webkit-transform: rotate(-45deg);
            }

            body {
                background-color: #64F13B;
                color: #011897;
            }
            
            div {
                border-bottom: 1.5px solid #011897;
            }
            
            input, input:focus, input:hover, input:active {
                background-color: #64F13B;
                color: black;
                outline: none;
                box-shadow:none;
                border: none;
                padding: 5px;
            }
            
            button, button:focus, button:hover, button:active {
                border-color: #011897;
                background-color: #011897;
                color: white;
                outline: none;
                box-shadow:none;
            }
            
            form {
                margin-top: 0px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
  
    <body>
        <form action="admin.php" method="post" id="loginform">
            <a style="float:right;" href="index">Ralli9/20<i class="right"></i></a><br>
            <label>Utilizador: </label><div><input type="text" name="user"></div><br>
            <label>Password: </label><div><input type="password" name="pass"></div><br>
            <button type="submit" form="loginform" value="submit">Entrar</button>
            <button type="reset" form="loginform" value="reset">Repor</button>
        </form>
        
        <script src="scripts/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
  