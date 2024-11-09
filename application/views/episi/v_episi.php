<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pegawai Episi</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<section class="content m-2">
		<div class="container mt-4">


			<h2 class="text-center ">Data Pegawai Episi</h2>
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


			<div class=""> 
				<div class="table-responsive">
					<table class="table">
						<table class="table table-striped ">
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
									<th scope="col" colspan="2" class="text-center">aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($episi as $r){?>
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
									<td>

										<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_episi'];?>">Ubah</button>


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
										<a href="<?=base_url().'PegawaiEpisi/hapus_episi/'.$r['id_episi']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');">hapus</a>   
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
</html>