<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('satuan/edit') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Satuan</label>
                    <input type="hidden" name="id" value="<?= $satuan->id_satuan ?>">
                    <input type="text" name="satuan" value="<?= $satuan->satuan ?>">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket"><?= $satuan->ket_satuan ?></textarea>
                </div>
                <a href="<?= site_url('satuan') ?>" class="ui red animated button" tabindex="0">
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