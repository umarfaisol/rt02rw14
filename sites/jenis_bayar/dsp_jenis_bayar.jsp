<%
JenisBayar jb = new JenisBayar(sqlitedb, request, response);
%>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <%
    String tambah = path + "/sites/jenis_bayar/?action=tambah";
    %>
    <%-- menu --%>
    <div style="float: left; padding-left: 12px;">
        <a href="<%= tambah %>" class="btn btn-success" title="Tambah"><span class="glyphicon glyphicon-plus"></span></a>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <thead style="background-color: #B5B8B4;">
                <th style="width: 5%;">NO</th>
                <th>Keterangan</th>
                <th style="width: 10%;">Opsi</th>
            </thead>
            <%-- data jenis bayar --%>
            <%
            ArrayList dataBayar = jb.selectAll();
            for (int i = 0; i < dataBayar.size(); i++) {
                Object obj[] = (Object[])dataBayar.get(i);
                String displayStatusKtp = "";
                %>
                <tr>
                    <td><%= (i + 1) %></td>
                    <td><%= obj[1] %></td>
                    <td>
                        <%
                        String act = path + "/sites/jenis_bayar/?action=detail&id_jenis_bayar=" + obj[0];
                        String remove = path + "/sites/jenis_bayar/?action=hapus&id_jenis_bayar=" + obj[0];
                        %>
<%--                         <a class="btn btn-primary" href="<%= act %>" title="Lihat detail"><span class="glyphicon glyphicon-tasks"></span></a> --%>
                        <a class="btn btn-danger" href="<%= remove %>" title="hapus data jenis bayar!!!"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            <%
            }
            %>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
