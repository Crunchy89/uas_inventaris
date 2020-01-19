<div class="row">
	<div class="sixteen wide column">
		<div class="ui segments">
			<div class="ui segment">
				<h5 class="ui header">
					Ruang
				</h5>
			</div>
			<div class="ui segment">
				<a href="<?= site_url('ruang/tambah') ?>" class="ui primary vertical animated button" tabindex="0">
					<div class="hidden content">Tambah</div>
					<div class="visible content">
						<i class="add icon"></i>
					</div>
				</a>
				<table id="data_table" class="ui compact selectable striped celled table dataTable no-footer">
					<thead>
						<tr role="row">
							<th>No</th>
							<th>Ruangan</th>
							<th>Fungsi</th>
							<th>Luas</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $i = 1;
						foreach ($ruang as $row) { ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->nama_ruangan ?></td>
								<td><?= $row->fungsi_ruangan ?></td>
								<td><?= $row->luas ?></td>
								<td><img class="ui small image" src="<?= base_url('assets/img/ruangan/') . $row->gbr_ruangan ?>"></td>
								<td>
									<form action="<?= site_url('ruang/edit') ?>" method="post">
										<input type="hidden" name="id" value="<?= $row->id_ruangan ?>">
										<button type="submit" class="ui yellow vertical animated button" tabindex="0">
											<div class="hidden content">Edit</div>
											<div class="visible content">
												<i class="edit icon"></i>
											</div>
										</button>
										<div onclick="hapus(<?= $row->id_ruangan ?>)" class="ui red horizontal animated button" tabindex="0">
											<div class="hidden content">Hapus</div>
											<div class="visible content">
												<i class="trash icon"></i>
											</div>
										</div>
									</form>
								</td>
							</tr>
							<div class="ui basic modal" id="hapus<?= $row->id_ruangan ?>">
								<div class="ui icon header">
									<i class="trash icon"></i>
									Hapus <?= $row->nama_ruangan ?> ?
								</div>
								<div class="content">
									<p>Data yang sudah dihapus tidak bisa dikembalikan, apakah anda yakin ?</p>
								</div>
								<form action="<?= site_url('ruang/hapus') ?>" method="post">
									<input type="hidden" name="id" value="<?= $row->id_ruangan ?>">
									<div class="actions">
										<div class="ui red basic cancel inverted button">
											<i class="remove icon"></i>
											Tidak
										</div>
										<button type="submit" class="ui green ok inverted button">
											<i class="checkmark icon"></i>
											Ya
										</button>
									</div>
								</form>
							</div>
							<script>
								function hapus(id) {
									$('#hapus' + id)
										.modal('show');
								}
							</script>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>