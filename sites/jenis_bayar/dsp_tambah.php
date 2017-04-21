<?php
$path = $GLOBALS["SERVER"]
?>

<form role="form" method="post" action="<?php echo $path; ?>/sites/jenis_bayar/?action=simpan">
    <input type="hidden" name="action" value="simpan" />
    <input type="hidden" name="jenis" value="tambah" />

    <div class="box-body">
        <div class="form-group">
            <label for="nama_jenis">Keterangan</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" style="width:280px;" placeholder="Keterangan Jenis Pembayaran" />
        </div>

        <?php
        /** batal **/
        $redirect = $path."/sites/jenis_bayar";
        ?>

        <a href="<?php echo $redirect ?>" class="btn btn-warning">Batal</a>
        <input type="submit" class="btn btn-primary" value="Simpan" />

    </div><!-- /.box-body -->
</form>
