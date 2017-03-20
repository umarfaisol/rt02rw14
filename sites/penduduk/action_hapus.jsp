<%
Penduduk p = new Penduduk(sqlitedb, request, response);
String hasil = p.hapus();

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

response.setHeader("Refresh", "2;URL=" + path + "/sites/penduduk");
%>
