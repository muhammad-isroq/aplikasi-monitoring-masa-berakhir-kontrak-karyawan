<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css?v=3.2.0">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="<?=base_url();?>/assets/uicons-regular-rounded/css/uicons-regular-rounded.css">

  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
  <script nonce="f0bab485-e81a-42d9-8c22-c6775f70a16c">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">

      <ul class="navbar-nav" data-widget="tree">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url('Dashboard');?>" class="nav-link">Home</a>
        </li>    
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="" class="nav-link"><i class="fi fi-rr-user p-2"></i>welcome <?php echo  $this->session->userdata('username');?></a>
        </li>
        <li class="nav-item">
          <a href="#" id="logout-link" class="nav-link"><i class="fi fi-rr-sign-out-alt p-2"></i>Logout</a>
        </li>
      </ul>
    </nav>

    <?php

    $this->load->view('v_sidebar');

    ?>

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row row-md-2">
            <div class="col-sm-6">
              <h1 class="h3 mb-4 ">Dashboard</h1>
              <p class="text-bg-light"></p>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('Dashboard');?>">Dashboard</a></li>
                <li class="breadcrumb-item" arian-current="page"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <section class="content">
        <div class="container-fluid">
          <p class=""></p>
          <?php if($this->session->flashdata('success')){ ?>
            <script type="text/javascript">
              Swal.fire({
                title: "Data Ditambahkan!",               
                icon: "success"
              });
            </script>
          <?php } else if($this->session->flashdata('edit')){  ?>

            <script type="text/javascript">
              Swal.fire({
                title: "Data Diubah!",                
                icon: "success"
              });
            </script>         

          <?php } else if($this->session->flashdata('delete')){  ?>

            <script type="text/javascript">
              Swal.fire({
                title: "Data Dihapus!",               
                icon: "success"
              });
            </script>
          <?php } ?>
          <div class="row row-md-2 mb-3">
            <div class="col-md-8">
              <div class="card p-3 shadow-md">
                <p>
                  Selamat datang di Sistem Monitoring Masa Berakhir Kontrak Karyawan
                </p>
                <p>
                  Sistem ini akan mengirimkan notifikasi sebulan sebelum masa kontrak habis. Pesan, email penerima,email pengirim dan app pasword email pengirim dapat diedit pada tabel dibawah.
                </p>
                <br>
                <p>
                  note: app password adalah pengganti password email pengirim.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header text-bg-dark text-center">
                  Ubah Data admin
                </div>
                <div class="card-body table table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">NO</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($users as $r){ ?>
                      <tr >
                        <td><?= $no; ?></td>
                        <td><?= $r['username'];?></td>
                        <td><?= $r['password'];?></td>
                        <td><?= $r['nama_lengkap'];?></td>
                        <td>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-pen"></i>
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">ubah data admin</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="<?=base_url('Dashboard/update_user'); ?>"enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $r['id']; ?>">          
                                    <div class="form-group">
                                      <label for="">Username</label>
                                      <input type="text" name="username" value="<?= $r['username']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Password</label>
                                      <input type="password" name="password" value="<?= $r['password']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Nama Lengkap</label>
                                      <input type="text" name="nama_lengkap" value="<?= $r['nama_lengkap']; ?>" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>                               
                                  </form>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>            
          </div>
          <div class="row row-md">
            <div class="card mb-3">
              <div class="card-header bg-primary text-center " > 
                Edit pesan dan email penerima
              </div>              
              <div class="card-body table table-responsive p-0">
                <table class="table table-hover text-nowrap">

                  <thead>
                    <tr class="">
                      <th scope="col">NO</th>
                      <th scope="col">Email Penerima 1</th>
                      <th scope="col">Email Penerima 2</th>
                      <th scope="col">Pesan Penerima 1</th>
                      <th scope="col">Pesan Penerima 2</th>
                      <th scope="col">Email Pengirim</th>
                      <th scope="col">App Password Email Pengirim</th>
                      <th scope="col">Aksi</th>                                           
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($users as $r){?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r['email1'];?></td>
                        <td><?= $r['email2'];?></td>
                        <td><?= $r['message1'];?></td>
                        <td><?= $r['message2'];?></td>
                        <td><?= $r['smtp_user'];?></td>
                        <td><?= $r['smtp_pass'];?></td>
                        <td>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $r['id'];?>"><i class="fas fa-pen"></i></button>


                          <div class="modal fade" id="exampleModal1<?php echo $r['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah email</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="<?=base_url('Dashboard/update_email'); ?>"enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $r['id']; ?>">          
                                    <div class="form-group">
                                      <label for="">Email 1</label>
                                      <input type="text" name="email1" value="<?= $r['email1']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Email 2</label>
                                      <input type="text" name="email2" value="<?= $r['email2']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pesan 1</label>
                                      <textarea class="form-control" name="message1" aria-label="With textarea"><?= $r['message1']; ?></textarea>
                                    </div> 
                                    <div class="form-group">
                                      <label for="">Pesan 2</label>
                                      <textarea class="form-control" name="message2" aria-label="With textarea"><?= $r['message2']; ?></textarea>
                                    </div>                                                                  
                                    <div class="form-group">
                                      <label for="">Email Pengirim</label>
                                      <input type="text" name="smtp_user" value="<?= $r['smtp_user']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">App Password Email Pengirim</label>
                                      <input type="text" name="smtp_pass" value="<?= $r['smtp_pass']; ?>" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>                               
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>        
                      </tr>
                      <?php $no++;} ?>  
                    </tbody>
                  </table>

                </div>
                <br><br>              
              </div>
            </div>    
          </section>

          <footer class="main-footer text-center fixed-bottom">
            <strong>Copyright &copy; simkarya 2024</a>.</strong>

          </footer>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

      </div>

      <script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
          event.preventDefault();
          Swal.fire({
            title: 'Yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, logout',
            cancelButtonText: 'Tidak, tetap disini'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "<?=base_url('Auth/logout');?>";
            }
          });
        });
      </script>

      <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>

      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>

      <script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>

      <script src="AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

      <script src="AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
      <script src="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>

      <script src="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>

      <script src="AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

      <script src="AdminLTE-3.2.0/dist/js/adminlte.js?v=3.2.0"></script>

      <script src="AdminLTE-3.2.0/dist/js/demo.js"></script>

      <script src="AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
    </body>
    </html>
