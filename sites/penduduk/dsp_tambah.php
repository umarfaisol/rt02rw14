<?php
$path = $GLOBALS["SERVER"];
?>

<form role="form" action="/sites/penduduk" method="GET">
    <input type="hidden" name="action" value="simpan" />
    <input type="hidden" name="jenis" value="tambah" />

    <div class="box-body">
        <div class="form-group">
            <label for="nik">Nomor Induk Kependudukan (NIK)</label>
            <input type="text" class="form-control" id="nik" name="nik" style="width:280px;" placeholder="Nomor Induk Kependudukan (NIK)" />
        </div>

        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" />
        </div>

        <div class="form-group">
            <label for="blok">Blok</label>
            <input type="text" class="form-control" id="blok" name="blok" style="width:110px;" placeholder="Alamat Blok" />
        </div>

        <div class="form-group">
            <label for="status_ktp">Status KTP</label>
            <select class="form-control" id="status_ktp" name="status_ktp" style="width:130px;">
                <option value="0">Domisili</option>
                <option value="1" selected="selected">KTP GPR</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alamat_ktp">Alamat KTP</label>
            <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Alamat KTP" />
        </div>

        <div class="form-group">
            <label for="no_kk">Nomor KK</label>
            <input type="text" class="form-control" id="no_kk" name="no_kk" style="width:280px;" placeholder="Nomor Kartu Keluarga" />
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" style="width:350px;" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" />
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" style="width:120px;" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" />
        </div>

        <div class="form-group">
            <label for="a_kk">Kepala Keluarga?</label>
            <select class="form-control" id="a_kk" name="a_kk" style="width:80px;">
                <option value="0">Tidak</option>
                <option value="1" selected="selected">Ya</option>
            </select>
        </div>
        <?php
        /** batal **/
        $redirect = $path."/sites/penduduk";
        ?>

        <a href="<?php echo $redirect; ?>" class="btn btn-warning">Batal</a>
        <input type="submit" class="btn btn-primary" value="Simpan" />

    </div><!-- /.box-body -->
</form>
<script type="text/javascript">
$(".datepicker").datepicker({
    format: "dd-mm-yyyy"
});
</script>
