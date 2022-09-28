<?php
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
      header('location:login.php');
    }
}
 
?>

<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            background-color: #DACBEA;
            background-repeat: none;

        }

        #card {
            border-radius: 100px;
            height: 400px;
            margin: auto auto;
            width: 500px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
</head>

<body>
    <center><img src="images/orang.jpg" title="gambar orang" alt="gambar orang" border="1" style="width:710px;height:400px;left: calc(50% - 709px/2);
top: calc(50% - 171px/2 - 170.5px);">
    </center>
</body>

<body class="d-flex flex-column h-100">
    <div id="card">
        <div id="card-content">
            <!-- Begin page content -->
            <main role="main" class="flex-shrink-0">
                <div class="container">
                    <center>
                        <h1 class="mt-5">Register Form</h1>
                    </center>
                    <center>
                        <p class="lead">Silahkan Daftarkan Identitas Anda</p>
                    </center>
                    <hr />
                    <form method="post" action="">
                        <div class="form-group row mb-3">
                            <label for="username" class="col-sm-1 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nama" class="col-sm-1 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                    required autofocus>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-1 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-15">
                                <center><button class="btn btn-secondary btn-lg" type="submit"
                                        name="register">Register</button></center>
                                <center>
                                    <p class="mt-1 mb-2 text-muted"></p><a>Already Have Account?</a><a href="login.php"
                                        id="signup"><em>Login<em></a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <center><span class="text-muted">Tubes Database@2020</span>
        </div>
    </footer>
</body>