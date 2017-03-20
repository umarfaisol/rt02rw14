<form name="formCari" role="form">
    <input type="hidden" name="action" value="tambah" />
    <input type="hidden" name="step" value="action_cari" />
    <input type="hidden" name="jenis" value="<%= jenis %>" />

    <div class="box-body">
        <div class="form-group">
            <label for="textCari">Cari Warga yang Bayar (NIK/Nama)</label>
            <input type="text" class="form-control" id="textCari" name="textCari" placeholder="Nama / NIK" style="width: 300px;" />
        </div>
        <%
        /** batal **/
        String redirect = path + "/sites/pembayaran";
        %>

        <a href="<%= redirect %>" class="btn btn-warning">Batal</a>
        <input id="buttonCari" name="buttonCari" type="submit" class="btn btn-primary" value="Cari" />

    </div><!-- /.box-body -->
</form>
<div id="display_cari"></div>
<script type="text/javascript">
$(".datepicker").datepicker({
    format: "dd/mm/yyyy"
});
</script>
