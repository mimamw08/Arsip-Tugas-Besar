<?php
session_start();
require_once "db_connect.php";
$database = new database();

if( isset($_SESSION['is_login']))
{
    header('location:home.php');
}
 
else if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}
 
else if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;

    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($username,$password,$remember))
    {
        echo 
        "<script>
            alert('berhasil login');
            window.location.href = 'home.php';
        </script>";

    }else {
        "<script>
            alert('gagal login');
            window.location.href = 'home.php';
        </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!--<Bootstrap core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fronts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }

        body {

            background-color: #DACBEA;
            background-repeat: no-repeat;
        }

        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }

        #forget-pass {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 3px;
            text-align: right;
        }

        #card {
            background: #DACBEA;
            border-radius: 8px;
            height: 100px;
            margin: auto auto;
            width: 410px;
        }

        #card-content {
            padding: 20px 44px;
        }

        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;

        }

        #signup {
            color: #000000;
            font-family: "Raleway", sans-serif;
            font-size: 12pt;
            margin-top: 16px;
            text-align: bottom;
            cursor: pointer;
            transition: 0.25s;
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px, 1px, 8px, #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }

        .form-border {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 2px;
            width: 100%;
        }

        .form-content {
            background: #fbfbfb;
            border: none;
            outline: none;
            padding-top: 14px;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #24c64f;
        }
    </style>
    <!-- Custom styles for this template
    <link href="assets/css/signin.css" rel="stylesheet">-->
</head>


<body>
    <img src="images/orang.jpg" alt="gambar orang" title="gambar orang ini" border="1" style="width:710px;height:400px;position:center;left: calc(50% - 709px/2);
top: calc(50% - 171px/2 - 170.5px);">
</body>

<body class="text-center">
    <form class="form-signin" method="post" action="">
        <div id="card">
            <div id="card-content">
                <center>
                    <h1 class="h3 mb-3 font-weight-normal"></h1>
                </center>
                <div class="underline-title"></div>
                <label for="username" class="sr-only" style="padding-top:13px"></label>
                <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
                <label for="password" class="sr-only" style="padding-top: 22px;"></label>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                    required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                </div>
                <div>
                    <button class="btn btn-secondary btn-lg" type="submit" name="login">Login</button>
                </div>
                <p class="mt-5 mb-3 text-muted"></p><a>Don't have account yet?</a><a href="register.php" target="_blank"
                    id="signup"><em>Create Now</em></a>
            </div>
            <center>
                <p class="text-muted"><em>Tubes Database &copy; 2020</em></p>
            </center>
        </div>
    </form>
</body>

</html>