<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Simkarya</title>
    <link rel="icon" href="<?= base_url();?>/assets/img/logo.png" type="image">
    <link href="<?= base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                            <form method="POST" action="<?= base_url('Auth/login');?>">
                                                <!-- Alert untuk pesan kesalahan -->
                                                <?php if($this->session->flashdata('error')): ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?= $this->session->flashdata('error'); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="mb-3">
                                                    <label for="inputEmail" class="form-label mb-2">Username</label>
                                                    <input type="text" class="form-control mb-3" name="username" placeholder="Username" id="usr" required autofocus>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputPassword" class="form-label mb-2">Password</label>
                                                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                </div>
                                                <button class="btn btn-primary btn-block btn-sm form-control mt-3" type="submit">Login</button>
                                                
                                            </form>
                                            <?php if ($this->session->flashdata('error')): ?>
                                                <script>
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Login Gagal',
                                                        text: '<?= $this->session->flashdata('error'); ?>',
                                                        confirmButtonText: 'OK'
                                                    });
                                                </script>
                                            <?php endif; ?>

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
            <footer class="py-3 bg-light mt-5 fixed-bottom">
                <div class="container-fluid px-4">
                    <div class="text-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; simkarya 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.js');?>"></script>
</body>
</html>
