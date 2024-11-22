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

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css');?>">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/dist/css/adminlte.min.css?v=3.2.0');?>">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css');?>">

  <link rel="stylesheet" href="<?=base_url('assets/uicons-regular-rounded/css/uicons-regular-rounded.css');?>">

  <link rel="stylesheet" href="<?= base_url();?>AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
  <script nonce="f0bab485-e81a-42d9-8c22-c6775f70a16c">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?= base_url();?>AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <a href="" class="nav-link"><i class="fi fi-rr-user p-2"></i>Selamat datang <?php echo  $this->session->userdata('username');?></a>
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
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="h3 mb-4 ">PTT Reguler</h1>
          
      </div>
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('Dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item" arian-current="page">PTT Reguler</li>
        </ol>
    </div>
</div>
</div>
</div>


<section class="content">
    <div class="container-fluid">
      <div class="row row-md-2">
          <div class="col col-md-6 ">
              <div class="card text-bg-light">
                <div class="card-header bg-primary">
                    Data PTT Reguler
                </div>
                <div class="card-body">
                    <p>Data Pegawai ini diurutkan berdasarkan: </p>
                    <ul>
                      <li>Data yang belum melewati hari ini akan ditampilkan di urutan atas (yang kontraknya paling dekat di urutan teratas).</li>
                      <li>Data yang masa kontraknya sudah melewati hari ini akan ditampilkan di urutan bawah.</li>
                      <li>Notifikasi = 1 = notifikasi telah terkirim</li>
                      <li>Notifikasi = 0 = notifikasi telah belum terkirim</li>
                      <li>simkarya hanya mengirim notifikasi ke data yang notifikasinya 0 agar notifikasi tidak terkirim 2x</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="col col-md-6">
        <div class="card text-bg-light">
            <div class="card-header bg-primary">
                Cari period pegawai/Jabatan/nomor kontrak
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('PttReguler/search'); ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari" name="keyword">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
<div class="row row-md">
    <div class="card p-3">
      <div class="card-header bg-dark" > 
        <h2 class="text-center ">Data PTT Reguler</h2>
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <i class="fas fa-plus"></i> 
        </button>
    </div>


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?=base_url('PttReguler/insert_ptt_reguler'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Period</label>
                            <input type="text" name="period" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">KdCabang</label>
                            <input type="text" name="kdcabang" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Cabang</label>
                            <input type="text" name="cabang" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Unit Organisasi</label>
                            <input type="text" name="unit_organisasi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">NRK</label>
                            <input type="text" name="nrk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Empcat</label>
                            <input type="text" name="empcat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pangkat</label>
                            <input type="text" name="pangkat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected>Pilih Gender</option>
                                <option value="M">M</option>
                                <option value="F">F</option>                              
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control">
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
    <div class="card-body">

        <div class="table-responsive p-0">
         <table class="table table-hover text-nowrap">        
            <thead>
                <tr class="">
                    <th scope="col">NO</th>                    
                    <th scope="col">Period</th>            
                    <th scope="col">KdCabang</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Unit Organisasi</th>
                    <th scope="col">NRK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Empcat</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Notifikasi</th>
                    <th scope="col" colspan="2" class="text-center">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $page + 1; foreach($ptt_reguler as $r){?>
                    <tr>
                        <td><?= $no; ?></td>                        
                        <td><?= $r['period'];?></td>
                        <td><?= $r['kdcabang'];?></td>                        
                        <td><?= $r['cabang'];?></td>
                        <td><?= $r['unit_organisasi'];?></td> 
                        <td><?= $r['nrk'];?></td>                                    
                        <td><?= $r['nama'];?></td>
                        <td><?= $r['empcat'];?></td>
                        <td><?= $r['pangkat'];?></td>
                        <td><?= $r['jabatan'];?></td>
                        <td><?= $r['gender'];?></td>
                        <td><?= $r['start_date'];?></td>
                        <td><?= $r['end_date'];?></td>
                        <td><?= $r['is_notified'];?></td>
                        <td>

                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_ptt_reguler'];?>"><i class="fas fa-pen"></i></button>


                            <div class="modal fade" id="exampleModal2<?php echo $r['id_ptt_reguler'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="<?=base_url('PttReguler/update_ptt_reguler'); ?>"enctype="multipart/form-data">
                                                <input type="hidden" name="id_ptt_reguler" value="<?= $r['id_ptt_reguler']; ?>">          
                                                <div class="form-group">
                                                    <label for="">Period</label>
                                                    <input type="text" name="period" value="<?= $r['period']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">KdCabang</label>
                                                    <input type="text" name="kdcabang" value="<?= $r['kdcabang']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Cabang</label>
                                                    <input type="text" name="cabang" value="<?= $r['cabang']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Unit Organisasi</label>
                                                    <input type="text" name="unit_organisasi" value="<?= $r['unit_organisasi']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NRK</label>
                                                    <input type="text" name="nrk" value="<?= $r['nrk']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Empcat</label>
                                                    <input type="text" name="empcat" value="<?= $r['empcat']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Pangkat</label>
                                                    <input type="text" name="pangkat" value="<?= $r['pangkat']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jabatan</label>
                                                    <input type="text" name="jabatan" value="<?= $r['jabatan']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Gender</label>
                                                    <select class="form-select" name="gender" value="<?= $r['gender']; ?>" aria-label="Default select example">
                                                        <option selected><?= $r['gender']; ?></option>
                                                        <option value="M">M</option>
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Mulai</label>
                                                    <input type="date" name="start_date" value="<?= $r['start_date']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Selesai</label>
                                                    <input type="date" name="end_date" value="<?= $r['end_date']; ?>" class="form-control">
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
                        <td>
                            <a href="<?=base_url().'PttReguler/hapus_ptt_reguler/'.$r['id_ptt_reguler']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fas fa-trash"></i> 
                            </a>   
                        </td>                
                    </tr>
                    <?php $no++;} ?>  
                </tbody>
            </table>
            <!-- Tampilkan Pagination -->
            <div class="d-flex justify-content-center">
                <?= $pagination; ?>
                <script>
                    $(document).ready(function() {
                        $.getScript("<?= base_url('assets/dist/js/adminlte.min.js'); ?>");
                    });
                </script>

            </div>
        </div>   

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

<script src="<?= base_url('AdminLTE-3.2.0/plugins/jquery/jquery.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js');?>"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/chart.js/Chart.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/sparklines/sparkline.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?= base_url('AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/moment/moment.min.js');?>"></script>
<script src="<?= base_url('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/dist/js/adminlte.js?v=3.2.0');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/dist/js/demo.js');?>"></script>

<script src="<?= base_url('AdminLTE-3.2.0/dist/js/pages/dashboard.js');?>"></script>
</body>
</html>
