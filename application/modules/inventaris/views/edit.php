<div class="row">
    <div class="sixteen wide column">
        <form action="<?= site_url('inventaris/edit') ?>" method="POST" class="ui form" enctype="multipart/form-data">
            <div class="ui segment">
                <div class="two fields">
                    <div class="field">
                        <label>Nama inventaris</label>
                        <input type="text" name="inv" placeholder="Nama Inventaris" value="<?= $inv->nama_barang ?>">
                    </div>
                    <div class="field">
                        <label>Kode Inventaris</label>
                        <input type="text" name="kode" placeholder="Kode Inventaris" value="<?= $inv->kode_inv ?>">
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Ruangan</label>
                        <select class="ui search dropdown" id="ruang" name="ruang">
                            <option value="<?= $inv->id_ruangan ?>">Pilih Ruang</option>
                            <?php foreach ($ruang as $ruangs) : ?>
                                <option value="<?= $ruangs->id_ruangan ?>"><?= $ruangs->nama_ruangan ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Sumber</label>
                        <select class="ui search dropdown" id="sumber" name="sumber">
                            <option value="<?= $inv->id_sumber ?>">Pilih Sumber</option>
                            <?php foreach ($sumber as $row) : ?>
                                <option value="<?= $row->id_sumber ?>"><?= $row->sumber ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Jenis</label>
                        <select class="ui search dropdown" id="jenis" name="jenis">
                            <option value="<?= $inv->id_jenis ?>">Pilih Jenis</option>
                            <?php foreach ($jenis as $row) : ?>
                                <option value="<?= $row->id_jenis ?>"><?= $row->jenis ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Merek</label>
                        <input type="text" name="merek" placeholder="Merek" value="<?= $inv->merek ?>">
                    </div>
                    <div class="field">
                        <label>Seri</label>
                        <input type="text" name="seri" placeholder="Seri" <?= $inv->seri ?>>
                    </div>
                    <div class="field">
                        <label>Nilai Wajar</label>
                        <input type="text" name="nilai" placeholder="Nilai Wajar" <?= $inv->nilai_wajar ?>>
                    </div>
                </div>
                <div class="field">
                    <input type="hidden" name="gambarLama" value="<?= $inv->gambar ?>">
                    <input type="hidden" name="id" value="<?= $inv->id_inv ?>">
                    <img class="ui small image" src="<?= base_url('assets/img/inventaris/') . $inv->gambar ?>" id="output">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
                </div>
                <a href="<?= site_url('inventaris') ?>" class="ui red animated button" tabindex="0">
                    <div class="visible content">Kembali</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </a>
                <button class="ui green button" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>
</div>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>