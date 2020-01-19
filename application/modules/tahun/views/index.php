<div class="row">
	<div class="sixteen wide column">
		<div class="ui segments">
			<div class="ui segment">
				<h5 class="ui header">
					Tahun
				</h5>
			</div>
			<div class="ui segment">
				<a href="<?= site_url('tahun/tambah') ?>" class="ui primary vertical animated button" tabindex="0">
					<div class="hidden content">Tambah</div>
					<div class="visible content">
						<i class="add icon"></i>
					</div>
				</a>
				<table id="data_table" class="ui compact selectable striped celled table dataTable no-footer">
					<thead>
						<tr role="row">
							<th>No</th>
							<th>Tahun</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $i = 1;
						foreach ($tahun as $row) { ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->tahun ?></td>
								<td><?= $row->ket_tahun ?></td>
								<td>
									<form action="<?= site_url('tahun/edit') ?>" method="post">
										<input type="hidden" name="id" value="<?= $row->id_tahun ?>">
										<button type="submit" class="ui yellow vertical animated button" tabindex="0">
											<div class="hidden content">Edit</div>
											<div class="visible content">
												<i class="edit icon"></i>
											</div>
										</button>
										<div onclick="hapus(<?= $row->id_tahun ?>)" class="ui red horizontal animated button" tabindex="0">
											<div class="hidden content">Hapus</div>
											<div class="visible content">
												<i class="trash icon"></i>
											</div>
										</div>
									</form>
								</td>
							</tr>
							<div class="ui basic modal" id="hapus<?= $row->id_tahun ?>">
								<div class="ui icon header">
									<i class="trash icon"></i>
									Hapus <?= $row->tahun ?> ?
								</div>
								<div class="content">
									<p>Data yang sudah dihapus tidak bisa dikembalikan, apakah anda yakin ?</p>
								</div>
								<form action="<?= site_url('tahun/hapus') ?>" method="post">
									<input type="hidden" name="id" value="<?= $row->id_tahun ?>">
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