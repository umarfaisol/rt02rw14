<%
Penduduk pend = new Penduduk(sqlitedb, request, response);
JenisBayar jb = new JenisBayar(sqlitedb, request, response);
String id_penduduk = request.getParameter("id_penduduk");
ArrayList hasilCari = pend.cariDenganId();
Object obj[] = (Object[])hasilCari.get(0);
String bln[] = {"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"};
%>
<form role="form" method="post" action="<%= path %>/sites/pembayaran/">
    <input type="hidden" name="action" value="tambah" />
    <input type="hidden" name="step" value="simpan" />
    <input type="hidden" name="id_penduduk" value="<%= id_penduduk %>" />

    <div class="box-body">
        <label>Input Data Pembayaran</label><br/>
        <div class="form-group">
            <label for="nama_lengkap">Nama</label>
            <input type="text" class="form-control" readonly="readonly" name="nama_lengkap" placeholder="Nama" style="width: 300px;" value="<%= obj[1] %>" />
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" readonly="readonly" placeholder="Tahun" style="width: 80px;" value="2017" />
        </div>
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <select class="form-control" id="bulan" name="bulan" style="width: 180px;">
                <%--
                <option value="0"<%= (status_ktp.equals("0")?" selected=\"selected\"":"") %>>Domisili</option>
                --%>
                <%
                for (int i = 0; i < bln.length; i++) {
                %>
                    <option value="<%= i %>"><%= bln[i] %></option>
                <%
                }
                %>
            </select>
        </div>
        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" name="nominal" placeholder="Nominal" style="width: 120px;"/>
        </div>
        <div class="form-group">
            <label for="id_jenis_bayar">Jenis Pembayaran</label>
            <select class="form-control" id="id_jenis_bayar" name="id_jenis_bayar" style="width: 220px;">
            <%
            ArrayList dataBayar = jb.selectAll();
            for (int i = 0; i < dataBayar.size(); i++) {
                Object o[] = (Object[])dataBayar.get(i);
                %>
                <option value="<%= o[0] %>"><%= o[1] %></option>
            <%
            }
            %>
            </select>
        </div>
        <%
        /** batal **/
        String redirect = path + "/sites/pembayaran";
        %>

        <a href="<%= redirect %>" class="btn btn-warning">Batal</a>
        <input type="submit" class="btn btn-primary" value="Simpan" />

    </div><!-- /.box-body -->
</form>
<script type="text/javascript">
$(".datepicker").datepicker({
    format: "dd/mm/yyyy"
});
</script>
