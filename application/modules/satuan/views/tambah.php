<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('satuan/tambah') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Satuan</label>
                    <input type="text" name="satuan" placeholder="satuan">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket" placeholder="Keterangan"></textarea>
                </div>
                <a href="<?= site_url('satuan') ?>" class="ui red animated button" tabindex="0">
                    <div class="visible content">Kembali</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </a>
                <button class="ui green button" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>