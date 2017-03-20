<%
String cari = request.getParameter("textCari");
Penduduk pend = new Penduduk(sqlitedb, request, response);
ArrayList hasilCari = pend.cariDenganNikAtauNama(cari);
System.out.println(cari + ":" + hasilCari.size());
%>
<h1 style="text-align:center;font-size:18px;">Hasil Cari</h1>
<hr/>

<div class="box-body">
    <table class="table table-bordered table-stripped table-condensed">
        <thead style="background-color: #B5B8B4;">
            <th style="width: 5%;">NO</th>
            <th>NAMA</th>
            <th style="width: 8%;">BLOK</th>
            <th style="width: 10%;">Opsi</th>
        </thead>
        <%-- data hasil cari --%>
        <%
        for (int i = 0; i < hasilCari.size(); i++) {
            Object obj[] = (Object[])hasilCari.get(i);
            %>
            <tr>
                <td><%= (i + 1) %></td>
                <td><%= obj[1] %></td>
                <td><%= obj[7] %></td>
                <td>
                    <%
                    String pilih = path + "/sites/pembayaran/?action=tambah&step=input_bayar&jenis=" + jenis + "&id_penduduk=" + obj[0];
                    %>
                    <a class="btn btn-primary" href="<%= pilih %>" title="pilih warga ini!!!">
                        <%--<span class="glyphicon glyphicon-remove"></span>--%>
                        <img src="<%= path %>/asset/dist/img/ok.png" />Pilih
                    </a>
                </td>
            </tr>
        <%
        }
        %>
    </table>
<%
/** batal **/
String redirect = path + "/sites/pembayaran/?action=tambah&step=cari_warga";
%>

<div>
    <a href="<%= redirect %>" class="btn btn-success">Kembali</a>
</div>
