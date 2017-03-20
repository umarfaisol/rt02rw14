<%
Pembayaran p = new Pembayaran(sqlitedb, request, response);
String hasil = p.simpanTambah();

if (hasil.equals("ok")) {
%>
    <span class="label label-success">Data telah disimpan!!!</span>
<%
}
else {
%>
    <span class="label label-danger"><%= hasil %></span>
<%
}

response.setHeader("Refresh", "2;URL=" + path + "/sites/pembayaran");
%>
