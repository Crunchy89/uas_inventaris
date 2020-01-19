<div class="row">
    <div class="sixteen wide column">
        <form action="<?= site_url('ruang/tambah') ?>" method="POST" class="ui form" enctype="multipart/form-data">
            <div class="ui segment">
                <div class="field">
                    <label>Nama Ruangan</label>
                    <input type="text" name="ruang" placeholder="Nama Ruangan">
                </div>
                <div class="field">
                    <label>Fungsi Ruangan</label>
                    <input type="text" name="fungsi" placeholder="Fungsi ruangan">
                </div>
                <div class="field">
                    <label>Luas</label>
                    <input type="text" name="luas" placeholder="Luas">
                </div>
                <div class="field">
                    <img class="ui small image" src="<?= base_url() ?>assets/img/noimage.png" id="output">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
                </div>
                <a href="<?= site_url('ruang') ?>" class="ui red animated button" tabindex="0">
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