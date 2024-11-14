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

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav" data-widget="tree">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url('Admin');?>" class="nav-link">Home</a>
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
          <h1 class="h3 mb-4 ">Dashboard</h1>
          <p>Selamat datang di Sistem Monitoring Masa Berakhir Kontrak Karyawan</p>
      </div>
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('Admin');?>">Dashboard</a></li>
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
<div class="row">
    <div class="card border-0">
      <div class="card-header" > 
        <h2 class="text-center ">Data Pegawai Wisesa</h2>
    </div>

    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">
        tambah
    </button>           
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?=base_url('PegawaiWisesa/insert_wisesa'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Npp</label>
                            <input type="text" name="npp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Posisi Pekerjaan</label>
                            <input type="text" name="posisi_pekerjaan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tunjangan</label>
                            <input type="text" name="tunjangan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Bank</label>
                            <input type="text" name="bank" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Rek</label>
                            <input type="text" name="no_rek" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input type="text" name="total" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Kontrak</label>
                            <input type="text" name="no_kontrak" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kontrak Awal</label>
                            <input type="date" name="kontrak_awal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kontrak Akhir</label>
                            <input type="date" name="kontrak_akhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Bulan</label>
                            <input type="text" name="jumlah_bulan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Devisi</label>
                            <input type="text" name="devisi" class="form-control">
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
    <div class="card-body table table-responsive p-0">
        <table class="table table-hover text-nowrap">        
            <thead>
                <tr class="">
                    <th scope="col">NO</th>
                    <th scope="col">Npp</th>
                    <th scope="col">Nama</th>            
                    <th scope="col">Posisi Pekerjaan</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">Bank</th>
                    <th scope="col">No Rek</th>
                    <th scope="col">Total</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">No Kontrak</th>
                    <th scope="col">Kontrak Awal</th>
                    <th scope="col">Kontrak Akhir</th>
                    <th scope="col">Jumlah Bulan</th>
                    <th scope="col">Devisi</th>
                    <th scope="col" colspan="2" class="text-center">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($wisesa as $r){?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $r['npp'];?></td>
                    <td><?= $r['nama'];?></td>
                    <td><?= $r['posisi_pekerjaan'];?></td>
                    <td><?= $r['lokasi'];?></td>
                    <td><?= $r['tgl_lahir'];?></td> 
                    <td><?= $r['gaji_pokok'];?></td>                                    
                    <td><?= $r['tunjangan'];?></td>
                    <td><?= $r['bank'];?></td>
                    <td><?= $r['no_rek'];?></td>
                    <td><?= $r['total'];?></td>
                    <td><?= $r['pendidikan'];?></td>
                    <td><?= $r['jurusan'];?></td>
                    <td><?= $r['no_kontrak'];?></td>
                    <td><?= $r['kontrak_awal'];?></td>
                    <td><?= $r['kontrak_akhir'];?></td>
                    <td><?= $r['jumlah_bulan'];?></td>
                    <td><?= $r['devisi'];?></td>
                    <td>

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_wisesa'];?>">Ubah</button>


                        <div class="modal fade" id="exampleModal2<?php echo $r['id_wisesa'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="<?=base_url('PegawaiWisesa/update_wisesa'); ?>"enctype="multipart/form-data">
                                            <input type="hidden" name="id_wisesa" value="<?= $r['id_wisesa']; ?>">          
                                            <div class="form-group">
                                                <label for="">Npp</label> 
                                                <input type="text" name="npp" value="<?= $r['npp']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Posisi Pekerjaan</label>
                                                <input type="text" name="posisi_pekerjaan" value="<?= $r['posisi_pekerjaan']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lokasi</label>
                                                <input type="text" name="lokasi" value="<?= $r['lokasi']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" value="<?= $r['tgl_lahir']; ?>" class="form-control">                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gaji Pokok</label>
                                                <input type="text" name="gaji_pokok" value="<?= $r['gaji_pokok']; ?>" class="form-control">                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tunjangan</label>
                                                <input type="text" name="tunjangan" value="<?= $r['tunjangan']; ?>" class="form-control">                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bank</label>
                                                <input type="text" name="bank" value="<?= $r['bank']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">No Rek</label>
                                                <input type="text" name="no_rek" value="<?= $r['no_rek']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Total</label>
                                                <input type="text" name="total" value="<?= $r['total']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pendidikan</label>
                                                <input type="text" name="pendidikan" value="<?= $r['pendidikan']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jurusan</label>
                                                <input type="text" name="jurusan" value="<?= $r['jurusan']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">No Kontrak</label>
                                                <input type="text" name="no_kontrak" value="<?= $r['no_kontrak']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kontrak Awal</label>
                                                <input type="date" name="kontrak_awal" value="<?= $r['kontrak_awal']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kontrak Akhir</label>
                                                <input type="date" name="kontrak_akhir" value="<?= $r['kontrak_akhir']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jumlah Bulan</label>
                                                <input type="text" name="jumlah_bulan" value="<?= $r['jumlah_bulan']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Devisi</label>
                                                <input type="text" name="devisi" value="<?= $r['devisi']; ?>" class="form-control">
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
                        <a href="<?=base_url().'PegawaiWisesa/hapus_wisesa/'.$r['id_wisesa']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');">hapus</a>   
                    </td>                
                </tr>
                <?php $no++;} ?>  
            </tbody>
        </table>

    </div>




</div>
</div>
</section>
<footer class="main-footer text-center">
  <strong>Copyright &copy; simkarya 2024</a>.</strong>

</footer>

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>



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
