<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="<?= base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                                <div class="card-header">
                                    Selamat datang kembali
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Kolom Logo -->
                                        <div class="col-md-6 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                                            <img src="<?= base_url('assets/img/logo.jpeg');?>" alt="Logo" class="img-fluid w-100" style="max-width: 200px;">
                                        </div>
                                        <!-- Kolom Form -->
                                        <div class="col-md-6">
                                            <form>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" placeholder="username" />
                                                    <label for="inputEmail">Username</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                </div>
                                                <button class="btn btn-primary btn-block btn-sm form-control mt-3" type="submit">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-5 bg-light mt-5">
                <div class="container-fluid px-4">
                    <div class="text-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; simkarya 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.js');?>"></script>
</body>
</html>
