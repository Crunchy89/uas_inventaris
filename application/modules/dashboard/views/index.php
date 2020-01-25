<div class="row">
    <div class="sixteen wide column">
        <div class="ui segments">
            <div class="ui segment">
                <h5 class="ui header">
                    Dashboard
                </h5>
            </div>
            <div class="ui segment">
                <table id="data_table" class="ui small compact selectable striped celled table dataTable no-footer">
                    <thead>
                        <tr role="row">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Barang</th>
                            <th rowspan="2">Merek</th>
                            <th rowspan="2">Jumlah Barang</th>
                            <th colspan="<?= count($kondisi) ?>" style="text-align:center">Keadaan</th>
                            <th rowspan="2">Tempat</th>
                            <th rowspan="2">Sumber</th>
                            <th rowspan="2">Nilai Wajar</th>
                            <th rowspan="2">Total</th>
                            <th rowspan="2">% Kondisi</th>
                        </tr>
                        <tr>
                            <?php foreach ($kondisi as $rows) { ?>
                                <th><?= $rows->kondisi ?></th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($data as $row) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->nama_barang ?></td>
                                <td><?= $row->merek ?></td>
                                <td><?= count($this->db->get_where("inventaris", ['nama_barang' => $row->nama_barang, 'id_ruangan' => $row->id_ruangan])->result()) ?></td>
                                <?php foreach ($kondisi as $rows) { ?>
                                    <td>
                                        <?= count($this->db->get_where('inventaris', ['id_kondisi' => $rows->id_kondisi, 'nama_barang' => $row->nama_barang, 'id_ruangan' => $row->id_ruangan])->result_array()) ?>
                                    </td>
                                <?php } ?>
                                <td><?= $row->nama_ruangan ?></td>
                                <td><?= $row->sumber ?></td>
                                <td><?= $row->nilai_wajar ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>