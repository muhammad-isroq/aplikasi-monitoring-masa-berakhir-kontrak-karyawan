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
            <h1 class="h3 mb-4 ">Pegawai Episi</h1>
            
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('Dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item" arian-current="page">Pegawai Episi</li>
        </ol>
    </div>
</div>
</div>
</div>


<section class="content">
    <div class="container-fluid">
      <div class="row row-md-2">
          <div class="col-md-6 ">
              <div class="card text-bg-light shadow">
                <div class="card-header bg-primary">
                    Data Pegawai Episi
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
      <div class="col-md-6">
        <div class="card text-bg-light shadow">
            <div class="card-header bg-primary">
                Cari pegawai episi
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('PegawaiEpisi/search'); ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari pegawai berdasarkan nama,nip/brevet" name="keyword">
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
        <h2 class="text-center ">Data Pegawai Episi</h2>
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
                    <form method="POST" action="<?=base_url('PegawaiEpisi/insert_episi'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Penyedia Eksternal</label>
                            <input type="text" name="penyedia_eksternal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" name="nip" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Cabang</label>
                            <input type="text" name="cabang" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Wilayah</label>
                            <input type="text" name="wilayah" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">No KTP</label>
                            <input type="text" name="no_ktp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NO KK</label>
                            <input type="text" name="no_kk" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NO NPWP</label>
                            <input type="text" name="no_npwp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NO Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NO BPJS Kesehatan</label>
                            <input type="text" name="no_bpjs_kesehatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NO BPJS Ketenagakerjaan</label>
                            <input type="text" name="no_bpjs_ketenagakerjaan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Bank</label>
                            <input type="text" name="bank" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Usia Ditahun 2023</label>
                            <input type="text" name="usia_ditahun2023" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Tinggal</label>
                            <input type="text" name="alamat_tinggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kota/Kab</label>
                            <input type="text" name="kota_kab" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat_ktp</label>
                            <input type="text" name="alamat_ktp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Keahlian</label>
                            <input type="text" name="keahlian" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Brevet</label>
                            <input type="text" name="brevet" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Operasional Nonoperasional</label>
                            <input type="text" name="operasional_nonoperasional" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Status Kawin</label>
                            <input type="text" name="status_kawin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" name="agama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kontrak Awal</label>
                            <input type="date" name="kontrak_awal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kontrak Akhir</label>
                            <input type="date" name="kontrak_akhir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Devisi</label>
                            <input type="text" name="devisi" class="form-control" required>
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
                    <th scope="col">Penyedia Eksternal</th>
                    <th scope="col">NIP</th>            
                    <th scope="col">Cabang</th>
                    <th scope="col">Wilayah</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">No KTP</th>
                    <th scope="col">No KK</th>
                    <th scope="col">No NPWP</th>
                    <th scope="col">No Rek</th>
                    <th scope="col">No bpjs kesehatan</th>
                    <th scope="col">No bpjs ketenagakerjaan</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Usia ditahun 2023</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat Tinggal</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kota/Kab</th>
                    <th scope="col">Alamat KTP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Keahlian</th>
                    <th scope="col">brevet</th>
                    <th scope="col">operasional nonoperasional</th>
                    <th scope="col">pendidikan</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">Status Kawin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Kontrak Awal</th>
                    <th scope="col">Kontrak Akhir</th>                                  
                    <th scope="col">Devisi</th>
                    <th scope="col">Notifikasi</th>
                    <th scope="col" colspan="2" class="text-center">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $page + 1; foreach($episi as $r){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r['penyedia_eksternal'];?></td>
                        <td><?= $r['nip'];?></td>
                        <td><?= $r['cabang'];?></td>
                        <td><?= $r['wilayah'];?></td>
                        <td><?= $r['nama_pegawai'];?></td>  
                        <td><?= $r['no_ktp'];?></td>
                        <td><?= $r['no_kk'];?></td>
                        <td><?= $r['no_npwp'];?></td>
                        <td><?= $r['no_rekening'];?></td>
                        <td><?= $r['no_bpjs_kesehatan'];?></td>
                        <td><?= $r['no_bpjs_ketenagakerjaan'];?></td>
                        <td><?= $r['bank'];?></td>
                        <td><?= $r['tempat_lahir'];?></td>
                        <td><?= $r['tgl_lahir'];?></td>
                        <td><?= $r['usia_ditahun2023'];?></td>
                        <td><?= $r['jenis_kelamin'];?></td>
                        <td><?= $r['alamat_tinggal'];?></td>
                        <td><?= $r['provinsi'];?></td>
                        <td><?= $r['kota_kab'];?></td>
                        <td><?= $r['alamat_ktp'];?></td>
                        <td><?= $r['email'];?></td>
                        <td><?= $r['keahlian'];?></td>
                        <td><?= $r['brevet'];?></td>
                        <td><?= $r['operasional_nonoperasional'];?></td>
                        <td><?= $r['pendidikan'];?></td>
                        <td><?= $r['jurusan'];?></td>
                        <td><?= $r['status_kawin'];?></td>
                        <td><?= $r['agama'];?></td>
                        <td><?= $r['kontrak_awal'];?></td>
                        <td><?= $r['kontrak_akhir'];?></td>                                 
                        <td><?= $r['devisi'];?></td>
                        <td><?= $r['is_notified'];?></td>
                        <td>

                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_episi'];?>"><i class="fas fa-pen"></i></button>


                            <div class="modal fade" id="exampleModal2<?php echo $r['id_episi'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="<?=base_url('PegawaiEpisi/update_episi'); ?>"enctype="multipart/form-data">
                                                <input type="hidden" name="id_episi" value="<?= $r['id_episi']; ?>">          
                                                <div class="form-group">
                                                    <label for="">Penyedia Eksternal</label>
                                                    <input type="text" name="penyedia_eksternal" value="<?= $r['penyedia_eksternal'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NIP</label>
                                                    <input type="text" name="nip" value="<?= $r['nip'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Cabang</label>
                                                    <input type="text" name="cabang" value="<?= $r['cabang'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Wilayah</label>
                                                    <input type="text" name="wilayah" value="<?= $r['wilayah'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Pegawai</label>
                                                    <input type="text" name="nama_pegawai" value="<?= $r['nama_pegawai'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">No KTP</label>
                                                    <input type="text" name="no_ktp" value="<?= $r['no_ktp'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NO KK</label>
                                                    <input type="text" name="no_kk" value="<?= $r['no_kk'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NO NPWP</label>
                                                    <input type="text" name="no_npwp" value="<?= $r['no_npwp'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NO Rekening</label>
                                                    <input type="text" name="no_rekening" value="<?= $r['no_rekening'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NO BPJS Kesehatan</label>
                                                    <input type="text" name="no_bpjs_kesehatan" value="<?= $r['no_bpjs_kesehatan'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NO BPJS Ketenagakerjaan</label>
                                                    <input type="text" name="no_bpjs_ketenagakerjaan" value="<?= $r['no_bpjs_ketenagakerjaan'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Bank</label>
                                                    <input type="text" name="bank" value="<?= $r['bank'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" value="<?= $r['tempat_lahir'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" value="<?= $r['tgl_lahir'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Usia Ditahun 2023</label>
                                                    <input type="text" name="usia_ditahun2023" value="<?= $r['usia_ditahun2023'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input type="text" name="jenis_kelamin" value="<?= $r['jenis_kelamin'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Alamat Tinggal</label>
                                                    <input type="text" name="alamat_tinggal" value="<?= $r['alamat_tinggal'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Provinsi</label>
                                                    <input type="text" name="provinsi" value="<?= $r['provinsi'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kota/Kab</label>
                                                    <input type="text" name="kota_kab" value="<?= $r['kota_kab'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Alamat_ktp</label>
                                                    <input type="text" name="alamat_ktp" value="<?= $r['alamat_ktp'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" value="<?= $r['email'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Keahlian</label>
                                                    <input type="text" name="keahlian" value="<?= $r['keahlian'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Brevet</label>
                                                    <input type="text" name="brevet" value="<?= $r['brevet'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Operasional Nonoperasional</label>
                                                    <input type="text" name="operasional_nonoperasional" value="<?= $r['operasional_nonoperasional'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Pendidikan</label>
                                                    <input type="text" name="pendidikan" value="<?= $r['pendidikan'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jurusan</label>
                                                    <input type="text" name="jurusan" value="<?= $r['jurusan'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Status Kawin</label>
                                                    <input type="text" name="status_kawin" value="<?= $r['status_kawin'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" name="agama" value="<?= $r['agama'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kontrak Awal</label>
                                                    <input type="date" name="kontrak_awal" value="<?= $r['kontrak_awal'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kontrak Akhir</label>
                                                    <input type="date" name="kontrak_akhir" value="<?= $r['kontrak_akhir'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Devisi</label>
                                                    <input type="text" name="devisi" value="<?= $r['devisi'];?>" class="form-control">
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
                            <a href="<?=base_url().'PegawaiEpisi/hapus_episi/'.$r['id_episi']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fas fa-trash"></i> 
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
