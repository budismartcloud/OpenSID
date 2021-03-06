<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengaturan Kategori Lokasi</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=site_url('point')?>"> Daftar Tipe Lokasi</a></li>
			<li class="active">Pengaturan Kategori Lokasi</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-3">
          <?php $this->load->view('plan/nav.php')?>
				</div>
				<div class="col-md-9">
					<div class="box box-info">
            <div class="box-header with-border">
							<a href="<?=site_url("point/ajax_add_sub_point/$point")?>" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Tambah Kategori Lokasi Baru" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Kategori Lokasi">
								<i class="fa fa-plus"></i>Tambah Kategori Lokasi Baru
            	</a>
							<?php if ($_SESSION['grup']<4): ?>
								<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform', '<?=site_url("point/delete_all/")?>')" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
							<?php endif; ?>
							<a href="<?=site_url("point")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Tambah Artikel">
								<i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Tipe Lokasi
            	</a>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
										<form id="mainform" name="mainform" action="" method="post">
											<div class="row">
												<div class="col-sm-12">
													<div class="table-responsive">
														<table class="table table-bordered dataTable table-hover">
															<thead class="bg-gray disabled color-palette">
																<tr>
																	<th><input type="checkbox" id="checkall"/></th>
																	<th>No</th>
																	<th>Aksi</th>
																	<th>Nama</th>
																	<th>Aktif</th>
																	<th>Simbol</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($subpoint as $data): ?>
																	<tr>
																		<td><input type="checkbox" name="id_cb[]" value="<?=$data['id']?>" /></td>
																		<td><?=$data['no']?></td>
																		<td nowrap>
																			<a href="<?= site_url("point/ajax_add_sub_point/$point/$data[id]")?>" class="btn btn-warning btn-flat btn-sm"  title="Ubah" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Sub Point"><i class="fa fa-edit"></i></a>
																			<?php if ($data['enabled'] == '2'): ?>
																				<a href="<?= site_url("point/point_lock_sub_point/$point/$data[id]")?>" class="btn bg-navy btn-flat btn-sm" title="Aktifkan Sub Point"><i class="fa fa-lock">&nbsp;</i></a>
																			<?php elseif ($data['enabled'] == '1'): ?>
																				<a href="<?= site_url("point/point_unlock_sub_point/$point/$data[id]")?>" class="btn bg-navy btn-flat btn-sm" title="Non Aktifkan Sub Point"><i class="fa fa-unlock"></i></a>
																			<?php endif; ?>
																			<a href="#" data-href="<?= site_url("point/delete_sub_point/$point/$data[id]")?>" class="btn bg-maroon btn-flat btn-sm"  title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	  </td>
																		<td width="70%"><?= $data['nama']?></td>
																		<td><?= $data['aktif']?></td>
																		<td><img src="<?= base_url("assets/images/gis/point")?>/<?= $data['simbol']?>"></td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class='modal fade' id='confirm-delete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
								<div class='modal-dialog'>
									<div class='modal-content'>
										<div class='modal-header'>
											<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
											<h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
										</div>
										<div class='modal-body btn-info'>
											Apakah Anda yakin ingin menghapus data ini?
										</div>
										<div class='modal-footer'>
											<button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
											<a class='btn-ok'>
												<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" id="ok-delete"><i class='fa fa-trash-o'></i> Hapus</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>

