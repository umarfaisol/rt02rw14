<form role="form" method="post" action="<%= path %>/sites/jenis_bayar/">
    <input type="hidden" name="action" value="simpan" />
    <input type="hidden" name="jenis" value="tambah" />

    <div class="box-body">
        <div class="form-group">
            <label for="nama_jenis">Keterangan</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" style="width:280px;" placeholder="Keterangan Jenis Pembayaran" />
        </div>

        <%
        /** batal **/
        String redirect = path + "/sites/jenis_bayar";
        %>

        <a href="<%= redirect %>" class="btn btn-warning">Batal</a>
        <input type="submit" class="btn btn-primary" value="Simpan" />

    </div><!-- /.box-body -->
</form>
