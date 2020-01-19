<div class="row">
    <div class="sixteen wide column">
        <form action="<?= site_url('ruang/edit') ?>" method="POST" class="ui form" enctype="multipart/form-data">
            <div class="ui segment">
                <div class="field">
                    <label>Nama Ruangan</label>
                    <input type="hidden" name="id" value="<?= $ruang->id_ruangan ?>">
                    <input type="text" name="ruang" value="<?= $ruang->nama_ruangan ?>">
                </div>
                <div class="field">
                    <label>Fungsi Ruangan</label>
                    <input type="text" name="fungsi" value="<?= $ruang->fungsi_ruangan ?>">
                </div>
                <div class="field">
                    <label>Luas</label>
                    <input type="text" name="luas" value="<?= $ruang->luas ?>">
                </div>
                <div class="field">
                    <input type="hidden" name="gambarLama" value="<?= $ruang->gbr_ruangan ?>">
                    <img class="ui small image" src="<?= base_url('assets/img/ruangan/') . $ruang->gbr_ruangan ?>" id="output">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
                </div>
                <a href="<?= site_url('ruang') ?>" class="ui red animated button" tabindex="0">
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