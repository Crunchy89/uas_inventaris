<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('kondisi/tambah') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Kondisi</label>
                    <input type="text" name="kondisi" placeholder="kondisi">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket" placeholder="Keterangan"></textarea>
                </div>
                <a href="<?= site_url('kondisi') ?>" class="ui red animated button" tabindex="0">
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