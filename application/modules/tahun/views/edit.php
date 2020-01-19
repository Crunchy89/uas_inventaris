<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('tahun/edit') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Tahun</label>
                    <input type="hidden" name="id" value="<?= $tahun->id_tahun ?>">
                    <input type="text" name="tahun" value="<?= $tahun->tahun ?>">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket"><?= $tahun->ket_tahun ?></textarea>
                </div>
                <a href="<?= site_url('tahun') ?>" class="ui red animated button" tabindex="0">
                    <div class="visible content">Kembali</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </a>
                <button class="ui green button" type="submit">Ubah</button>
            </form>
        </div>
    </div>
</div>