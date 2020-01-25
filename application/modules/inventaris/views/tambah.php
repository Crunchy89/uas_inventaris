<div class="row">
    <div class="sixteen wide column">
        <form action="<?= site_url('inventaris/tambah') ?>" method="POST" class="ui form" enctype="multipart/form-data">
            <div class="ui segment">
                <div class="two fields">
                    <div class="field">
                        <label>Nama inventaris</label>
                        <input type="text" name="inv" placeholder="Nama Inventaris" value="<?= set_value('inv') ?>">
                        <?php if (form_error('inv')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('inv') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label>Kode Inventaris</label>
                        <input type="text" name="kode" placeholder="Kode Inventaris" value="<?= set_value('kode') ?>">
                        <?php if (form_error('kode')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('kode') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Ruangan</label>
                        <select class="ui search dropdown" id="ruang" name="ruang">
                            <option value="">Pilih Ruangan</option>
                            <?php foreach ($ruang as $ruangs) : ?>
                                <option value="<?= $ruangs->id_ruangan ?>"><?= $ruangs->nama_ruangan ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('ruang')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('ruang') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label>Sumber</label>
                        <select class="ui search dropdown" id="sumber" name="sumber">
                            <option value="">Pilih Sumber</option>
                            <?php foreach ($sumber as $row) : ?>
                                <option value="<?= $row->id_sumber ?>"><?= $row->sumber ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('sumber')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('sumber') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label>Jenis</label>
                        <select class="ui search dropdown" id="jenis" name="jenis">
                            <option value="">Pilih Jenis</option>
                            <?php foreach ($jenis as $row) : ?>
                                <option value="<?= $row->id_jenis ?>"><?= $row->jenis ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('jenis')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('jenis') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Merek</label>
                        <input type="text" name="merek" placeholder="Merek">
                    </div>
                    <div class="field">
                        <label>Seri</label>
                        <input type="text" name="seri" placeholder="Seri">
                    </div>
                    <div class="field">
                        <label>Nilai Wajar</label>
                        <input type="text" name="nilai" placeholder="Nilai Wajar">
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Kondisi</label>
                        <select class="ui search dropdown" id="kondisi" name="kondisi">
                            <option value="">Pilih Kondisi</option>
                            <?php foreach ($kondisi as $row) : ?>
                                <option value="<?= $row->id_kondisi ?>"><?= $row->kondisi ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('jenis')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('jenis') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label>Tahun</label>
                        <select class="ui search dropdown" id="tahun" name="tahun">
                            <option value="">Pilih Tahun</option>
                            <?php foreach ($tahun as $row) : ?>
                                <option value="<?= $row->id_tahun ?>"><?= $row->tahun ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('jenis')) : ?>
                            <div class="ui red pointing label">
                                <?= form_error('jenis') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <img class="ui small image" src="<?= base_url() ?>assets/img/noimage.png" id="output">
                        <label>Gambar</label>
                        <input type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
                    </div>
                </div>
                <a href="<?= site_url('inventaris') ?>" class="ui red animated button" tabindex="0">
                    <div class="visible content">Kembali</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </a>
                <button class="ui green button" type="submit">Tambah</button>
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