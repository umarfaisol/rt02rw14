<form name="formCari" role="form" method="post" action="<?php echo $path.'/sites/pembayaran/'; ?>">
    <input type="hidden" name="action" value="tambah" />
    <input type="hidden" name="step" value="action_cari" />

    <div class="box-body">
        <div class="form-group">
            <label for="textCari">Cari Warga yang Bayar (NIK/Nama)</label>
            <input type="text" class="form-control" id="textCari" name="textCari" placeholder="Nama / NIK" style="width: 300px;" />
        </div>
        <?php
        /** batal **/
        $redirect = $path."/sites/pembayaran/";
        ?>

        <a href="<?php echo $redirect; ?>" class="btn btn-warning">Batal</a>
        <input id="buttonCari" name="buttonCari" type="submit" class="btn btn-primary" value="Cari" />

    </div><!-- /.box-body -->
</form>
<div id="display_cari"></div>
<script type="text/javascript">
$(".datepicker").datepicker({
    format: "dd/mm/yyyy"
});
</script>
