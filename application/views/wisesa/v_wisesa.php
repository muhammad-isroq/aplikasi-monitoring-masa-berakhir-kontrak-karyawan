<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Barang</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
	<section class="content m-2">
		<div class="container mt-4">


			<h2 class="text-center ">Data Barang</h2>
			<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">
				tambah
			</button>
			<a href="<?= base_url('barang/laporan');?>" class="btn btn-success">Laporan Data Laporan</a>
			<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog modal-fullscreen-xxl-down">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form method="POST" action="<?=base_url('Barang/insert_barang'); ?>" enctype="multipart/form-data">
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
									<label for="">Tunjangan</label>
									<input type="text" name="tunjangan" class="form-control">
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


			<div class=""> 
				<div class="table-responsive">
					<table class="table">
						<table class="table table-striped ">
							<thead>
								<tr class="">
									<th scope="col">NO</th>
									<th scope="col">Npp</th>
									<th scope="col">Nama</th>            
									<th scope="col">Posisi Pekerjaan</th>
									<th scope="col">Lokasi</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Tunjangan</th>
									<th scope="col" colspan="2" class="text-center">aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($barang as $r){?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $r['npp'];?></td>
										<td><?= $r['nama'];?></td>
										<td><?= $r['posisi_pekerjaan'];?></td>
										<td><?= $r['lokasi'];?></td>
										<td><?= $r['tgl_lahir'];?></td>
										<td><?= $r['satuan'];?></td>
										<td><?= $r['tunjangan'];?></td>            
										<td>

											<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_barang'];?>">Ubah</button>


											<div class="modal fade" id="exampleModal2<?php echo $r['id_barang'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<form method="POST" action="<?=base_url('Barang/update_barang'); ?>"enctype="multipart/form-data">
																<input type="hidden" name="id_barang" value="<?= $r['id_barang']; ?>">          
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
																	<label for="">Tunjangan</label>
																	<input type="text" name="tunjangan" value="<?= $r['tunjangan']; ?>" class="form-control">                        
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
											<a href="<?=base_url().'Barang/hapus_barang/'.$r['id_barang']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');">hapus</a>   
										</td>                
									</tr>
									<?php $no++;} ?>  
								</tbody>
							</table>
						</table>
					</div>
				</div>									
			</div>
		</section>


		<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
		<script>
			AOS.init();
		</script>
		<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
	</body>
	</html>