<div class="row">
    <div class="sixteen wide column">
        <div class="ui segment">
            <form action="<?= site_url('sumber/tambah') ?>" method="POST" class="ui form">
                <div class="field">
                    <label>Sumber</label>
                    <input type="text" name="sumber" placeholder="Sumber" value="<?= set_value('sumber') ?>">
                    <?php if (form_error('sumber')) : ?>
                        <div class="ui red pointing label">
                            <?= form_error('sumber') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <textarea rows="2" name="ket" placeholder="Keterangan"></textarea>
                </div>
                <a href="<?= site_url('sumber') ?>" class="ui red animated button" tabindex="0">
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