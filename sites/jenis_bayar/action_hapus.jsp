<%
JenisBayar jb = new JenisBayar(sqlitedb, request, response);
String hasil = jb.hapus();

if (hasil.equals("ok")) {
%>
    <span class="label label-success">Data telah dihapus!!!</span>
<%
}
else {
%>
    <span class="label label-danger"><%= hasil %></span>
<%
}

response.setHeader("Refresh", "2;URL=" + path + "/sites/jenis_bayar");
%>
