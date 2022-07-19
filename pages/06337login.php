<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- CSS Custom -->
    <!-- <link rel="stylesheet" href="./assets/css/floating-labels.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CRUD Barang | Login</title>
</head>

<body>
    <div class="header">
        <!-- content before waves -->
        <div class="inner-header">
            <form action="../modules/function/06337cek_login.php" method="post" class="form-signin">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-2 font-weight-normal">Login</h1>
                    <p>Masukan Username & Password Anda Dengan benar.</p>
                </div>
                <div class="form-label-group">
                    <input class="form-control" type="text" name="username" id="username" placeholder="Masukan Username anda" required autofocus>
                    <label for="username">Masukan Username</label>
                </div>
                <div class="form-label-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password anda" required>
                    <label for="password">Masukan Password</label>
                </div>
                <div class="form-label-group">
                    <select name="level" class="form-control">
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
        <!-- Waves Container -->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
    <!--Content starts-->
    <div class="content flex">
        <p class="mt-2 mb-4 text-muted text-center">CRUD Barang | RioDefa &copy; 2022-<?= date('Y') ?></p>
    </div>
    <!--Content ends-->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>