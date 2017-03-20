<script type="text/javascript">
var pindah = function() {
    var ktp = document.getElementById("status_ktp");
    var status_ktp = ktp.options[ktp.selectedIndex].value;

    window.location = "<%= path %>/sites/penduduk/?status_ktp=" + status_ktp;
};
</script>
<%
Pembayaran p = new Pembayaran(sqlitedb, request, response);
/*String status_ktp = request.getParameter("status_ktp");
if (status_ktp == null) {
    status_ktp = "2";
}
*/
%>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <%
    String tambah = path + "/sites/pembayaran/?action=tambah&step=cari_warga";
    %>
    <%-- menu --%>
    <div style="float: left; padding-left: 12px;">
        <a href="<%= tambah %>" class="btn btn-success" title="Tambah"><span class="glyphicon glyphicon-plus"></span></a>
    </div>
<%--
    <div style="float: right; padding-right: 12px;">
        <select class="form-control" id="status_ktp" name="status_ktp" style="width:130px;" onchange="pindah();">
            <option value="0"<%= (status_ktp.equals("0")?" selected=\"selected\"":"") %>>Domisili</option>
            <option value="1"<%= (status_ktp.equals("1")?" selected=\"selected\"":"") %>>KTP GPR</option>
            <option value="2"<%= (status_ktp.equals("2")?" selected=\"selected\"":"") %>>Semua</option>
        </select>
    </div>
--%>
    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <thead style="background-color: #B5B8B4;">
                <th style="width: 5%;">NO</th>
                <th>NAMA</th>
                <th style="width: 12%;">Blok</th>
                <th style="width: 12%;">Nominal</th>
                <th style="width: 15%;">Waktu Bayar</th>
                <th style="width: 10%;">Opsi</th>
            </thead>
            <%-- data pembayaran --%>
            <%
            ArrayList dataPembayaran = p.selectAll();
            for (int i = 0; i < dataPembayaran.size(); i++) {
                Object obj[] = (Object[])dataPembayaran.get(i);
                %>
                <tr>
                    <td><%= (i + 1) %></td>
                    <td><%= obj[6] %></td>
                    <td><%= obj[7] %></td>
                    <td><%= obj[3] %></td>
                    <td><%= obj[4] %></td>
                    <td>
                        <%
                        String remove = path + "/sites/pembayaran/?action=hapus&id_pembayaran=" + obj[0];
                        %>
                        <a class="btn btn-danger" href="<%= remove %>" title="hapus data pembayaran!!!"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            <%
            }
            %>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
