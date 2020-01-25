<div class="row">
    <div class="sixteen wide column">
        <div class="ui segments">
            <div class="ui segment">
                <h5 class="ui header">
                    Inventaris
                </h5>
            </div>
            <div class="ui segment">
                <a href="<?= site_url('inventaris/tambah') ?>" class="ui primary vertical animated button" tabindex="0">
                    <div class="hidden content">Tambah</div>
                    <div class="visible content">
                        <i class="add icon"></i>
                    </div>
                </a>
                <table id="data_table" class="ui small compact selectable striped celled table dataTable no-footer">
                    <thead>
                        <tr role="row">
                            <th>No</th>
                            <th>Barang</th>
                            <th>Merek</th>
                            <th>Kd Inventaris</th>
                            <th>Sumber</th>
                            <th>Seri</th>
                            <th>Jenis</th>
                            <th>Kondisi</th>
                            <th>Nilai Wajar</th>
                            <th>Tahun</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($inventaris as $row) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->nama_barang ?></td>
                                <td><?= $row->merek ?></td>
                                <td><?= $row->kode_inv ?></td>
                                <td><?= $row->sumber ?></td>
                                <td><?= $row->seri ?></td>
                                <td><?= $row->jenis ?></td>
                                <td><?= $row->kondisi ?></td>
                                <td><?= $row->nilai_wajar ?></td>
                                <td><?= $row->tahun ?></td>
                                <td><img src="<?= base_url('assets/img/inventaris/') . $row->gambar ?>" width="50px"></td>
                                <td>
                                    <form action="<?= site_url('inventaris/edit') ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $row->id_inv ?>">
                                        <button type="submit" class="ui yellow vertical animated button" tabindex="0">
                                            <div class="hidden content">Edit</div>
                                            <div class="visible content">
                                                <i class="edit icon"></i>
                                            </div>
                                        </button>
                                        <div onclick="hapus(<?= $row->id_inv ?>)" class="ui red horizontal animated button" tabindex="0">
                                            <div class="hidden content">Hapus</div>
                                            <div class="visible content">
                                                <i class="trash icon"></i>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <div class="ui basic modal" id="hapus<?= $row->id_inv ?>">
                                <div class="ui icon header">
                                    <i class="trash icon"></i>
                                    Hapus <?= $row->nama_barang ?> ?
                                </div>
                                <div class="content">
                                    <p>Data yang sudah dihapus tidak bisa dikembalikan, apakah anda yakin ?</p>
                                </div>
                                <form action="<?= site_url('inventaris/hapus') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $row->id_inv ?>">
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