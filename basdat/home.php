<?php
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>HOME</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
    body {
        background-color: #ffffff;
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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="home.php">Home</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="daftarmhs/index.php">Data Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftarmhs/tampil.php">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kelompok.php">About Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                &nbsp; <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
            </div>
        </div>
    </nav>
    <br>
    <main role="main" class="container">

        <div class="starter-template">
            <center>
                <h1>Welcome
                    <?php echo $_SESSION['username']; ?>
                </h1>
            </center>
        </div>
        <br><br>
        <center>
            <img src="images/operator.jpeg" alt="operator" width="500" height="450">
        </center>
        <br><br>
        <center>
            <div class="shadow p-3 mb-4 bg-white rounded">
                <p class="text-uppercase">
                    Silahkan Untuk Melengkapi Data Diri Pada Menu Di Atas
                </p>
            </div>
        </center>

    </main><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
</body>