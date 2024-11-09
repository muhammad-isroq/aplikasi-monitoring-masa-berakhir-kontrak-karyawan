<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pegawai Wisesa</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<section class="content m-2">
		<div class="container mt-4">


			<h2 class="text-center ">Data Pegawai Wisesa</h2>
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
						</table>
					</div>
				</div>									
			</div>
		</section>



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
	</html> -->