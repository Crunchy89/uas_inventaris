<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('jenis/edit') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Jenis</label>
                    <input type="hidden" name="id" value="<?= $jenis->id_jenis ?>">
                    <input type="text" name="jenis" value="<?= $jenis->jenis ?>">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket"><?= $jenis->ket_jenis ?></textarea>
                </div>
                <a href="<?= site_url('jenis') ?>" class="ui red animated button" tabindex="0">
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