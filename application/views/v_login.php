<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - SB Admin 2</title>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet" />
    <style>
      

    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container-fluid mx-auto">
        <div class="row-md justify-content-md-center">
            <div class="row row-md-8">
                <div class="col-md-6">
                    <img src="<? base_url('assets/img/logo.jpeg');?>" alt="" width="50" height="50">
                </div>
                <div class="col-md-6">
                    <form class="form-signin bg-body rounded form-lg shadow bg-body-tertiary rounded" method="POST" action="<?= base_url('Auth/login');?>"
                    >
                    <h4 class="m-3">Selamat datang kembali</h4>
                    <img class="mb-4 animate__animated animate__flip animate__infinite infinite" src="<?=base_url();?>/assets/logo-login.png" alt="" width="100" height="100" >
                    <h1 class="h3 mb-3 font-weight-normal">Log In</h1>    

                    <label for="inputEmail" class="sr-only float-start mb-2">Username</label>
                    <input type="text" class="form-control mb-3" name="username" placeholder="Username" id="usr" required autofocus>
                    <label for="inputPassword" class="sr-only float-start mb-2">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                    <button class="btn btn-primary btn-block btn-sm form-control mt-3" type="submit">Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>
</html>
