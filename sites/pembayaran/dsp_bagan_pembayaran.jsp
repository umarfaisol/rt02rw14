<%
Penduduk p = new Penduduk(sqlitedb, request, response);
Pembayaran pem = new Pembayaran(sqlitedb, request, response);
String bln[] = {"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"};
int tahun = 2017;
%>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <%
    String tambah = path + "/sites/pembayaran/?action=tambah&step=cari_warga&jenis=iuran";
    String tambahLain = path + "/sites/pembayaran/?action=tambah&step=cari_warga&jenis=iuranLain";
    %>
    <%-- menu --%>
    <div style="float: left; padding-left: 12px;">
        <a href="<%= tambah %>" class="btn btn-success" title="Proses pembayaran pada bulan tertentu!"><span class="glyphicon glyphicon-plus"></span></a>
        <%--
        <a href="<%= tambahLain %>" class="btn btn-primary" title="Tambah tagihan selain iuran rutin pada bulan tertentu!"><span class="glyphicon glyphicon-plus"></span>Buat Tagihan</a>
        --%>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <tr style="background-color: #B5B8B4;font-weight:bold;">
                <td rowspan="2" style="width: 5%; text-align: center;">NO</td>
                <td rowspan="2">NAMA</td>
                <td rowspan="2" style="width: 12%;">BLOK</td>
                <td colspan="12" style="text-align:center;">BULAN</td>
            </tr>
            <tr style="background-color: #B5B8B4;font-weight:bold;">
                <%
                for (int i = 0; i < bln.length; i++) {
                %>
                    <td style="text-align:center;"><%= bln[i].substring(0, 3) %></td>
                <%
                }
                %>
            </tr>
            <%-- data pembayaran --%>
            <%
            ArrayList dataPenduduk = p.selectAll();
            for (int i = 0; i < dataPenduduk.size(); i++) {
                Object obj[] = (Object[])dataPenduduk.get(i);
                %>
                <tr>
                    <td><%= (i + 1) %></td>
                    <td><%= obj[1] %></td>
                    <td><%= obj[7] %></td>
                    <%
                    for (int j = 0; j < bln.length; j++) {
                        boolean stsBayar = pem.getSudahBayarIuran(obj[0].toString(), tahun, j);
                        String keterangan = "Sudah bayar iuran rutin bulan " + bln[j];
                        %>
                        <td style="text-align:center;">
                            <%
                            if (stsBayar == true) {
                            %>
                                <img style="cursor:pointer;" src="<%= path %>/asset/dist/img/ok.png" title="<%= keterangan %>"/>
                            <%
                            }
                            else {
                            %>
                                <%--<img src="<%= path %>/asset/dist/img/del.png"/>--%>
                                -
                            <%
                            }
                            %>
                        </td>
                    <%
                    }
                    %>

                </tr>
                <%
            }
            %>

        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
